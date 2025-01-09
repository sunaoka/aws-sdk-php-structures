<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MULTI_VALUED'|'SINGLE_VALUED' $ParameterValueType
 * @property string $Name
 * @property DecimalDefaultValues $DefaultValues
 * @property DecimalValueWhenUnsetConfiguration $ValueWhenUnset
 * @property list<MappedDataSetParameter> $MappedDataSetParameters
 */
class DecimalParameterDeclaration extends Shape
{
    /**
     * @param array{
     *     ParameterValueType: 'MULTI_VALUED'|'SINGLE_VALUED',
     *     Name: string,
     *     DefaultValues?: DecimalDefaultValues,
     *     ValueWhenUnset?: DecimalValueWhenUnsetConfiguration,
     *     MappedDataSetParameters?: list<MappedDataSetParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
