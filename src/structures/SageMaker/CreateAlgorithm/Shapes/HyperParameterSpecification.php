<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property 'Integer'|'Continuous'|'Categorical'|'FreeText' $Type
 * @property ParameterRange $Range
 * @property bool $IsTunable
 * @property bool $IsRequired
 * @property string $DefaultValue
 */
class HyperParameterSpecification extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Type: 'Integer'|'Continuous'|'Categorical'|'FreeText',
     *     Range?: ParameterRange,
     *     IsTunable?: bool,
     *     IsRequired?: bool,
     *     DefaultValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
