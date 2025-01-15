<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\SendHeartbeat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EdgeMetric>|null $AgentMetrics
 * @property list<Shapes\Model>|null $Models
 * @property string $AgentVersion
 * @property string $DeviceName
 * @property string $DeviceFleetName
 * @property Shapes\DeploymentResult|null $DeploymentResult
 */
class SendHeartbeatRequest extends Request
{
    /**
     * @param array{
     *     AgentMetrics?: list<Shapes\EdgeMetric>|null,
     *     Models?: list<Shapes\Model>|null,
     *     AgentVersion: string,
     *     DeviceName: string,
     *     DeviceFleetName: string,
     *     DeploymentResult?: Shapes\DeploymentResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
