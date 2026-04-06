<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IncludeNullValue
 * @property CustomParameterValues $CustomValues
 */
class CustomValuesConfiguration extends Shape
{
    /**
     * @param array{
     *     IncludeNullValue?: bool|null,
     *     CustomValues: CustomParameterValues
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
