<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cause
 * @property string $condition
 * @property string $node
 */
class MalformedConditionExpressionFlowValidationDetails extends Shape
{
    /**
     * @param array{
     *     cause: string,
     *     condition: string,
     *     node: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
