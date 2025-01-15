<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property 'MULTI_VALUED'|'SINGLE_VALUED' $ValueType
 * @property IntegerDatasetParameterDefaultValues|null $DefaultValues
 */
class IntegerDatasetParameter extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     ValueType: 'MULTI_VALUED'|'SINGLE_VALUED',
     *     DefaultValues?: IntegerDatasetParameterDefaultValues|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
