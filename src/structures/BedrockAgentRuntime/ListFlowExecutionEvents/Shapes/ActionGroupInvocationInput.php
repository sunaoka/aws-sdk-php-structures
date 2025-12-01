<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionGroupName
 * @property string|null $apiPath
 * @property 'LAMBDA'|'RETURN_CONTROL'|null $executionType
 * @property string|null $function
 * @property string|null $invocationId
 * @property list<Parameter>|null $parameters
 * @property RequestBody|null $requestBody
 * @property string|null $verb
 */
class ActionGroupInvocationInput extends Shape
{
    /**
     * @param array{
     *     actionGroupName?: string|null,
     *     apiPath?: string|null,
     *     executionType?: 'LAMBDA'|'RETURN_CONTROL'|null,
     *     function?: string|null,
     *     invocationId?: string|null,
     *     parameters?: list<Parameter>|null,
     *     requestBody?: RequestBody|null,
     *     verb?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
