<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DynamicDefaultValue|null $DynamicValue
 * @property list<\Aws\Api\DateTimeResult>|null $StaticValues
 * @property RollingDateConfiguration|null $RollingDate
 */
class DateTimeDefaultValues extends Shape
{
    /**
     * @param array{
     *     DynamicValue?: DynamicDefaultValue|null,
     *     StaticValues?: list<\Aws\Api\DateTimeResult>|null,
     *     RollingDate?: RollingDateConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
