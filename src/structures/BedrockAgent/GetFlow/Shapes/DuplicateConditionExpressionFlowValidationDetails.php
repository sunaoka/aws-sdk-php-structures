<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property string $node
 */
class DuplicateConditionExpressionFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     node: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
