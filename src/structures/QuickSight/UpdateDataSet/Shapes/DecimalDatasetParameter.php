<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property 'MULTI_VALUED'|'SINGLE_VALUED' $ValueType
 * @property DecimalDatasetParameterDefaultValues $DefaultValues
 */
class DecimalDatasetParameter extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     ValueType: 'MULTI_VALUED'|'SINGLE_VALUED',
     *     DefaultValues?: DecimalDatasetParameterDefaultValues
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
