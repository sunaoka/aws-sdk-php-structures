<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $command
 * @property int|null $interval
 * @property int|null $timeout
 * @property int|null $retries
 * @property int|null $startPeriod
 */
class HealthCheck extends Shape
{
    /**
     * @param array{
     *     command: list<string>,
     *     interval?: int|null,
     *     timeout?: int|null,
     *     retries?: int|null,
     *     startPeriod?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
