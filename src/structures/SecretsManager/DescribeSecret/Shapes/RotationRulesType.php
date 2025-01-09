<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DescribeSecret\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000> $AutomaticallyAfterDays
 * @property string $Duration
 * @property string $ScheduleExpression
 */
class RotationRulesType extends Shape
{
    /**
     * @param array{
     *     AutomaticallyAfterDays?: int<1, 1000>,
     *     Duration?: string,
     *     ScheduleExpression?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
