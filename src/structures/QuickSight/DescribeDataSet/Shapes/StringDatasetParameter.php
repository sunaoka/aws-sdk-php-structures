<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property 'MULTI_VALUED'|'SINGLE_VALUED' $ValueType
 * @property StringDatasetParameterDefaultValues $DefaultValues
 */
class StringDatasetParameter extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     ValueType: 'MULTI_VALUED'|'SINGLE_VALUED',
     *     DefaultValues?: StringDatasetParameterDefaultValues
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
