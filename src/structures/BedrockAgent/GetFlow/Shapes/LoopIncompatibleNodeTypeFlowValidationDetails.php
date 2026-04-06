<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $node
 * @property 'Input'|'Condition'|'Iterator'|'Collector' $incompatibleNodeType
 * @property string $incompatibleNodeName
 */
class LoopIncompatibleNodeTypeFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     node: string,
     *     incompatibleNodeType: 'Input'|'Condition'|'Iterator'|'Collector',
     *     incompatibleNodeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
