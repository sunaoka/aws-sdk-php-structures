<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $flowDefinitionArn
 * @property string|null $instructions
 */
class HumanWorkflowConfig extends Shape
{
    /**
     * @param array{
     *     flowDefinitionArn: string,
     *     instructions?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
