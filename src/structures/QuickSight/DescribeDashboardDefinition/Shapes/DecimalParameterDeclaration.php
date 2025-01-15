<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MULTI_VALUED'|'SINGLE_VALUED' $ParameterValueType
 * @property string $Name
 * @property DecimalDefaultValues|null $DefaultValues
 * @property DecimalValueWhenUnsetConfiguration|null $ValueWhenUnset
 * @property list<MappedDataSetParameter>|null $MappedDataSetParameters
 */
class DecimalParameterDeclaration extends Shape
{
    /**
     * @param array{
     *     ParameterValueType: 'MULTI_VALUED'|'SINGLE_VALUED',
     *     Name: string,
     *     DefaultValues?: DecimalDefaultValues|null,
     *     ValueWhenUnset?: DecimalValueWhenUnsetConfiguration|null,
     *     MappedDataSetParameters?: list<MappedDataSetParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
