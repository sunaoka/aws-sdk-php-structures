<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Command
 * @property int<60, 300>|null $Interval
 * @property int<30, 60>|null $Timeout
 * @property int<5, 10>|null $Retries
 * @property int<0, 300>|null $StartPeriod
 */
class ContainerHealthCheck extends Shape
{
    /**
     * @param array{
     *     Command: list<string>,
     *     Interval?: int<60, 300>|null,
     *     Timeout?: int<30, 60>|null,
     *     Retries?: int<5, 10>|null,
     *     StartPeriod?: int<0, 300>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
