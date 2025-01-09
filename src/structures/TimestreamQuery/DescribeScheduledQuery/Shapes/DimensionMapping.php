<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'VARCHAR' $DimensionValueType
 */
class DimensionMapping extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     DimensionValueType: 'VARCHAR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
