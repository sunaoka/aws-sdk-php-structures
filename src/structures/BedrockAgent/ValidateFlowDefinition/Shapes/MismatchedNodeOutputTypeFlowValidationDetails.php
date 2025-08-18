<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $node
 * @property string $output
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array' $expectedType
 */
class MismatchedNodeOutputTypeFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     node: string,
     *     output: string,
     *     expectedType: 'String'|'Number'|'Boolean'|'Object'|'Array'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
