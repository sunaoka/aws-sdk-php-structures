<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionGroupExecutor $actionGroupExecutor
 * @property string $actionGroupName
 * @property APISchema $apiSchema
 * @property string $description
 * @property FunctionSchema $functionSchema
 * @property 'AMAZON.UserInput'|'AMAZON.CodeInterpreter' $parentActionGroupSignature
 */
class AgentActionGroup extends Shape
{
    /**
     * @param array{
     *     actionGroupExecutor?: ActionGroupExecutor,
     *     actionGroupName: string,
     *     apiSchema?: APISchema,
     *     description?: string,
     *     functionSchema?: FunctionSchema,
     *     parentActionGroupSignature?: 'AMAZON.UserInput'|'AMAZON.CodeInterpreter'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
