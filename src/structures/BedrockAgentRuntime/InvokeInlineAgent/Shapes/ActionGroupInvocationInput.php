<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroupName
 * @property string $apiPath
 * @property 'LAMBDA'|'RETURN_CONTROL' $executionType
 * @property string $function
 * @property string $invocationId
 * @property list<Parameter> $parameters
 * @property RequestBody $requestBody
 * @property string $verb
 */
class ActionGroupInvocationInput extends Shape
{
    /**
     * @param array{
     *     actionGroupName?: string,
     *     apiPath?: string,
     *     executionType?: 'LAMBDA'|'RETURN_CONTROL',
     *     function?: string,
     *     invocationId?: string,
     *     parameters?: list<Parameter>,
     *     requestBody?: RequestBody,
     *     verb?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
