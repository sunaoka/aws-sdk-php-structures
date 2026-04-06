<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $definition
 * @property double $value
 * @property string $label
 */
class NumericalScaleDefinition extends Shape
{
    /**
     * @param array{
     *     definition: string,
     *     value: double,
     *     label: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
