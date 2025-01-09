<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'String'|'Number'|'Boolean'|'Object'|'Array' $expectedType
 * @property string $node
 * @property string $output
 */
class MismatchedNodeOutputTypeFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     expectedType: 'String'|'Number'|'Boolean'|'Object'|'Array',
     *     node: string,
     *     output: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
