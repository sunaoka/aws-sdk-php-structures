<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeTimeBasedAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Monday
 * @property array<string, string>|null $Tuesday
 * @property array<string, string>|null $Wednesday
 * @property array<string, string>|null $Thursday
 * @property array<string, string>|null $Friday
 * @property array<string, string>|null $Saturday
 * @property array<string, string>|null $Sunday
 */
class WeeklyAutoScalingSchedule extends Shape
{
    /**
     * @param array{
     *     Monday?: array<string, string>|null,
     *     Tuesday?: array<string, string>|null,
     *     Wednesday?: array<string, string>|null,
     *     Thursday?: array<string, string>|null,
     *     Friday?: array<string, string>|null,
     *     Saturday?: array<string, string>|null,
     *     Sunday?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
