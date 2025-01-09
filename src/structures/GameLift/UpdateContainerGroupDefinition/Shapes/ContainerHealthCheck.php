<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Command
 * @property int $Interval
 * @property int $Retries
 * @property int $StartPeriod
 * @property int $Timeout
 */
class ContainerHealthCheck extends Shape
{
    /**
     * @param array{
     *     Command: list<string>,
     *     Interval?: int,
     *     Retries?: int,
     *     StartPeriod?: int,
     *     Timeout?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
