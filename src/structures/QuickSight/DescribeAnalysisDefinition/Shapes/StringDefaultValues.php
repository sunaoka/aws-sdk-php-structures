<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DynamicDefaultValue|null $DynamicValue
 * @property list<string>|null $StaticValues
 */
class StringDefaultValues extends Shape
{
    /**
     * @param array{
     *     DynamicValue?: DynamicDefaultValue|null,
     *     StaticValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
