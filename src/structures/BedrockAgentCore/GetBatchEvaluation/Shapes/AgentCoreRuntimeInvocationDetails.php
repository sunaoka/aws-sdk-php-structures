<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentRuntimeEndpointArn
 * @property string $agentRuntimeVersion
 * @property string|null $requestTemplate
 */
class AgentCoreRuntimeInvocationDetails extends Shape
{
    /**
     * @param array{
     *     agentRuntimeEndpointArn: string,
     *     agentRuntimeVersion: string,
     *     requestTemplate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
