package middleware

import "github.com/gofiber/fiber/v3"

func KunciApi(kunciBenar string) fiber.Handler {
	return func(c fiber.Ctx) error {
		apiKey := c.Get("X-Api-Key")

		if kunciBenar == "" || apiKey != kunciBenar {
			return fiber.NewError(
				fiber.StatusUnauthorized,
				"API Key tidak valid",
			)
		}

		return c.Next()
	}
}
