<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property string $name
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array' $type
 */
class FlowNodeInput extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     name: string,
     *     type: 'String'|'Number'|'Boolean'|'Object'|'Array'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
