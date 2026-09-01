<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentCoreRuntimeProtocolConfiguration|null $protocolConfiguration
 * @property AuthorizerConfiguration|null $authorizerConfiguration
 * @property WorkloadIdentityDetails|null $workloadIdentityDetails
 */
class AgentCoreRuntimeSourceDetails extends Shape
{
    /**
     * @param array{
     *     protocolConfiguration?: AgentCoreRuntimeProtocolConfiguration|null,
     *     authorizerConfiguration?: AuthorizerConfiguration|null,
     *     workloadIdentityDetails?: WorkloadIdentityDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
