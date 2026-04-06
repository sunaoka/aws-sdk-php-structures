<?php

namespace Sunaoka\Aws\Structures\Bedrock\ExportAutomatedReasoningPolicyVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $expression
 * @property string|null $alternateExpression
 */
class AutomatedReasoningPolicyDefinitionRule extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     expression: string,
     *     alternateExpression?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
