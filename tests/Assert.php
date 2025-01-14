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
}
