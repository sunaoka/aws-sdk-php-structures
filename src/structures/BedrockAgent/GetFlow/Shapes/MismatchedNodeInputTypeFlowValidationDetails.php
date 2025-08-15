<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $node
 * @property string $input
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array' $expectedType
 */
class MismatchedNodeInputTypeFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     node: string,
     *     input: string,
     *     expectedType: 'String'|'Number'|'Boolean'|'Object'|'Array'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
