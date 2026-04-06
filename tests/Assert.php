<?php

namespace Tests;

/**
 * @mixin \PHPUnit\Framework\TestCase
 */
trait Assert
{
    public function assertFileContains(string $needle, string $filename): void
    {
        $content = file_get_contents($filename);

        $constraint = self::stringContains($needle, false);

        self::assertThat($content, $constraint, "Failed asserting that file [{$filename}] contains [{$needle}].");
    }

    public function assertFileNotContains(string $needle, string $filename): void
    {
        $content = file_get_contents($filename);

        $constraint = self::logicalNot(self::stringContains($needle, false));

        self::assertThat($content, $constraint, "Failed asserting that file [{$filename}] does not contain [{$needle}].");
    }
}
