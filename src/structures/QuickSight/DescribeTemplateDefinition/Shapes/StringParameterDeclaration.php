<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MULTI_VALUED'|'SINGLE_VALUED' $ParameterValueType
 * @property string $Name
 * @property StringDefaultValues|null $DefaultValues
 * @property StringValueWhenUnsetConfiguration|null $ValueWhenUnset
 * @property list<MappedDataSetParameter>|null $MappedDataSetParameters
 */
class StringParameterDeclaration extends Shape
{
    /**
     * @param array{
     *     ParameterValueType: 'MULTI_VALUED'|'SINGLE_VALUED',
     *     Name: string,
     *     DefaultValues?: StringDefaultValues|null,
     *     ValueWhenUnset?: StringValueWhenUnsetConfiguration|null,
     *     MappedDataSetParameters?: list<MappedDataSetParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
