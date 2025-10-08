<?php

namespace Sunaoka\Aws\Structures\Bedrock\ExportAutomatedReasoningPolicyVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property string|null $description
 */
class AutomatedReasoningPolicyDefinitionTypeValue extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
