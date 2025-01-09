<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DescribeSecret\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AutomaticallyAfterDays
 * @property string $Duration
 * @property string $ScheduleExpression
 */
class RotationRulesType extends Shape
{
    /**
     * @param array{
     *     AutomaticallyAfterDays?: int,
     *     Duration?: string,
     *     ScheduleExpression?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
