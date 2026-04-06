<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array' $expectedType
 * @property string $input
 * @property string $node
 */
class MismatchedNodeInputTypeFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     expectedType: 'String'|'Number'|'Boolean'|'Object'|'Array',
     *     input: string,
     *     node: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
