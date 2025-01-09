<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array' $type
 */
class FlowNodeOutput extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'String'|'Number'|'Boolean'|'Object'|'Array'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
