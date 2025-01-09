<?php

namespace Sunaoka\Aws\Structures\OpsWorks\SetTimeBasedAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Monday
 * @property array<string, string> $Tuesday
 * @property array<string, string> $Wednesday
 * @property array<string, string> $Thursday
 * @property array<string, string> $Friday
 * @property array<string, string> $Saturday
 * @property array<string, string> $Sunday
 */
class WeeklyAutoScalingSchedule extends Shape
{
    /**
     * @param array{
     *     Monday?: array<string, string>,
     *     Tuesday?: array<string, string>,
     *     Wednesday?: array<string, string>,
     *     Thursday?: array<string, string>,
     *     Friday?: array<string, string>,
     *     Saturday?: array<string, string>,
     *     Sunday?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
