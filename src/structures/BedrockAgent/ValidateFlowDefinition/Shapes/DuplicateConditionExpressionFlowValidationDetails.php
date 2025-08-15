<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $node
 * @property string $expression
 */
class DuplicateConditionExpressionFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     node: string,
     *     expression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
