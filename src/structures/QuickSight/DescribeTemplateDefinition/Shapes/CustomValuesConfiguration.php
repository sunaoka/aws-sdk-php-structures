<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IncludeNullValue
 * @property CustomParameterValues $CustomValues
 */
class CustomValuesConfiguration extends Shape
{
    /**
     * @param array{
     *     IncludeNullValue?: bool,
     *     CustomValues: CustomParameterValues
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
