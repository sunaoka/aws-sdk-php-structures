<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $node
 * @property string $condition
 * @property string $cause
 */
class MalformedConditionExpressionFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     node: string,
     *     condition: string,
     *     cause: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
