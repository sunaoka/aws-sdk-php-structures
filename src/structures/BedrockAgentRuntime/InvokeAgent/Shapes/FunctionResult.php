<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionGroup
 * @property string|null $function
 * @property array<string, ContentBody>|null $responseBody
 * @property 'FAILURE'|'REPROMPT'|null $responseState
 */
class FunctionResult extends Shape
{
    /**
     * @param array{
     *     actionGroup: string,
     *     function?: string|null,
     *     responseBody?: array<string, ContentBody>|null,
     *     responseState?: 'FAILURE'|'REPROMPT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
