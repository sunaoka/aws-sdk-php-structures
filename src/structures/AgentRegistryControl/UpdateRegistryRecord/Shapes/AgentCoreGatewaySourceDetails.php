<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MCP'|null $protocolType
 * @property string|null $authorizerType
 * @property AuthorizerConfiguration|null $authorizerConfiguration
 * @property WorkloadIdentityDetails|null $workloadIdentityDetails
 */
class AgentCoreGatewaySourceDetails extends Shape
{
    /**
     * @param array{
     *     protocolType?: 'MCP'|null,
     *     authorizerType?: string|null,
     *     authorizerConfiguration?: AuthorizerConfiguration|null,
     *     workloadIdentityDetails?: WorkloadIdentityDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
