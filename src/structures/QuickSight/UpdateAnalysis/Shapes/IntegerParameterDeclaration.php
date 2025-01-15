<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MULTI_VALUED'|'SINGLE_VALUED' $ParameterValueType
 * @property string $Name
 * @property IntegerDefaultValues|null $DefaultValues
 * @property IntegerValueWhenUnsetConfiguration|null $ValueWhenUnset
 * @property list<MappedDataSetParameter>|null $MappedDataSetParameters
 */
class IntegerParameterDeclaration extends Shape
{
    /**
     * @param array{
     *     ParameterValueType: 'MULTI_VALUED'|'SINGLE_VALUED',
     *     Name: string,
     *     DefaultValues?: IntegerDefaultValues|null,
     *     ValueWhenUnset?: IntegerValueWhenUnsetConfiguration|null,
     *     MappedDataSetParameters?: list<MappedDataSetParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
