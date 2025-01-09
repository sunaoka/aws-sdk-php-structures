<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logDriver
 * @property array<string, string> $options
 * @property array<string, string> $parameters
 * @property string $error
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{
     *     logDriver: string,
     *     options?: array<string, string>,
     *     parameters?: array<string, string>,
     *     error?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
