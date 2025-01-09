<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\BatchDeleteAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property string $errorMessage
 * @property 'NOT_FOUND'|'INTERNAL_SERVER_ERROR'|'AGENT_IN_USE' $errorCode
 */
class BatchDeleteAgentError extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     errorMessage: string,
     *     errorCode: 'NOT_FOUND'|'INTERNAL_SERVER_ERROR'|'AGENT_IN_USE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
