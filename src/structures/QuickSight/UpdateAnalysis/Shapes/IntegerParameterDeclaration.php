<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MULTI_VALUED'|'SINGLE_VALUED' $ParameterValueType
 * @property string $Name
 * @property IntegerDefaultValues $DefaultValues
 * @property IntegerValueWhenUnsetConfiguration $ValueWhenUnset
 * @property list<MappedDataSetParameter> $MappedDataSetParameters
 */
class IntegerParameterDeclaration extends Shape
{
    /**
     * @param array{
     *     ParameterValueType: 'MULTI_VALUED'|'SINGLE_VALUED',
     *     Name: string,
     *     DefaultValues?: IntegerDefaultValues,
     *     ValueWhenUnset?: IntegerValueWhenUnsetConfiguration,
     *     MappedDataSetParameters?: list<MappedDataSetParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
