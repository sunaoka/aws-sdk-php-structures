<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $command
 * @property int $interval
 * @property int $timeout
 * @property int $retries
 * @property int $startPeriod
 */
class HealthCheck extends Shape
{
    /**
     * @param array{
     *     command: list<string>,
     *     interval?: int,
     *     timeout?: int,
     *     retries?: int,
     *     startPeriod?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
