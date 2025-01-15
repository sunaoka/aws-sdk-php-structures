<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property 'Integer'|'Continuous'|'Categorical'|'FreeText' $Type
 * @property ParameterRange|null $Range
 * @property bool|null $IsTunable
 * @property bool|null $IsRequired
 * @property string|null $DefaultValue
 */
class HyperParameterSpecification extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Type: 'Integer'|'Continuous'|'Categorical'|'FreeText',
     *     Range?: ParameterRange|null,
     *     IsTunable?: bool|null,
     *     IsRequired?: bool|null,
     *     DefaultValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
