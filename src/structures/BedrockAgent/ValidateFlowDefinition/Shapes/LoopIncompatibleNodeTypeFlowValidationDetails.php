<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $incompatibleNodeName
 * @property 'Input'|'Condition'|'Iterator'|'Collector' $incompatibleNodeType
 * @property string $node
 */
class LoopIncompatibleNodeTypeFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     incompatibleNodeName: string,
     *     incompatibleNodeType: 'Input'|'Condition'|'Iterator'|'Collector',
     *     node: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
