<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionGroupName
 * @property string|null $verb
 * @property string|null $apiPath
 * @property list<Parameter>|null $parameters
 * @property RequestBody|null $requestBody
 * @property string|null $function
 * @property 'LAMBDA'|'RETURN_CONTROL'|null $executionType
 * @property string|null $invocationId
 */
class ActionGroupInvocationInput extends Shape
{
    /**
     * @param array{
     *     actionGroupName?: string|null,
     *     verb?: string|null,
     *     apiPath?: string|null,
     *     parameters?: list<Parameter>|null,
     *     requestBody?: RequestBody|null,
     *     function?: string|null,
     *     executionType?: 'LAMBDA'|'RETURN_CONTROL'|null,
     *     invocationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
