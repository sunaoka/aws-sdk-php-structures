<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DescribeSecret\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000>|null $AutomaticallyAfterDays
 * @property string|null $Duration
 * @property string|null $ScheduleExpression
 */
class RotationRulesType extends Shape
{
    /**
     * @param array{
     *     AutomaticallyAfterDays?: int<1, 1000>|null,
     *     Duration?: string|null,
     *     ScheduleExpression?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
