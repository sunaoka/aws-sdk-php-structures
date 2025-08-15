<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $node
 * @property string $input
 * @property string $cause
 */
class MalformedNodeInputExpressionFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     node: string,
     *     input: string,
     *     cause: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
