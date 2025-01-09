<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Command
 * @property int<60, 300> $Interval
 * @property int<5, 10> $Retries
 * @property int<0, 300> $StartPeriod
 * @property int<30, 60> $Timeout
 */
class ContainerHealthCheck extends Shape
{
    /**
     * @param array{
     *     Command: list<string>,
     *     Interval?: int<60, 300>,
     *     Retries?: int<5, 10>,
     *     StartPeriod?: int<0, 300>,
     *     Timeout?: int<30, 60>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
