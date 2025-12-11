<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $definition
 * @property string $label
 */
class CategoricalScaleDefinition extends Shape
{
    /**
     * @param array{
     *     definition: string,
     *     label: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
