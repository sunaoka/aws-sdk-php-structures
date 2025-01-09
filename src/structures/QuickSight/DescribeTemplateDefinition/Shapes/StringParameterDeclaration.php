<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MULTI_VALUED'|'SINGLE_VALUED' $ParameterValueType
 * @property string $Name
 * @property StringDefaultValues $DefaultValues
 * @property StringValueWhenUnsetConfiguration $ValueWhenUnset
 * @property list<MappedDataSetParameter> $MappedDataSetParameters
 */
class StringParameterDeclaration extends Shape
{
    /**
     * @param array{
     *     ParameterValueType: 'MULTI_VALUED'|'SINGLE_VALUED',
     *     Name: string,
     *     DefaultValues?: StringDefaultValues,
     *     ValueWhenUnset?: StringValueWhenUnsetConfiguration,
     *     MappedDataSetParameters?: list<MappedDataSetParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
