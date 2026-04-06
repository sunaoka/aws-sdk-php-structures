<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $error
 * @property string $logDriver
 * @property array<string, string>|null $options
 * @property array<string, string>|null $parameters
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{
     *     error?: string|null,
     *     logDriver: string,
     *     options?: array<string, string>|null,
     *     parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
