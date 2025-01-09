<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cause
 * @property string $input
 * @property string $node
 */
class MalformedNodeInputExpressionFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     cause: string,
     *     input: string,
     *     node: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
