<?php

namespace Tests;

/**
 * @mixin \PHPUnit\Framework\TestCase
 */
trait Assert
{
    /**
     * @param class-string<\Exception> $exception
     *
     * @return void
     */
    public function expectExceptionCompat($exception)
    {
        if (method_exists($this, 'expectException')) {
            $this->expectException($exception);

            return;
        }

        if (method_exists($this, 'setExpectedException')) {
            $this->setExpectedException($exception);

            return;
        }

        $this->fail('Assertion not found');
    }

    /**
     * @param mixed  $actual
     * @param string $message
     *
     * @return void
     */
    public function assertIsArrayCompat($actual, $message = '')
    {
        if (method_exists($this, 'assertIsArray')) {
            $this->assertIsArray($actual, $message);

            return;
        }

        $constraint = self::isType('array');

        self::assertThat($actual, $constraint, $message);
    }

    /**
     * @param string $needle
     * @param string $filename
     *
     * @return void
     */
    public function assertFileContains($needle, $filename)
    {
        $content = file_get_contents($filename);

        $constraint = self::stringContains($needle, false);

        self::assertThat($content, $constraint, "Failed asserting that file [{$filename}] contains [{$needle}].");
    }

    /**
     * @param string $needle
     * @param string $filename
     *
     * @return void
     */
    public function assertFileNotContains($needle, $filename)
    {
        $content = file_get_contents($filename);

        $constraint = self::logicalNot(self::stringContains($needle, false));

        self::assertThat($content, $constraint, "Failed asserting that file [{$filename}] does not contain [{$needle}].");
    }
}
