<?php

namespace Sunaoka\Aws\Structures\Deadline\GetWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logDriver
 * @property array<string, string>|null $options
 * @property array<string, string>|null $parameters
 * @property string|null $error
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{
     *     logDriver: string,
     *     options?: array<string, string>|null,
     *     parameters?: array<string, string>|null,
     *     error?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
