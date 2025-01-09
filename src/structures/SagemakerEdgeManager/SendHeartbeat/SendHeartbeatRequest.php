<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\SendHeartbeat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EdgeMetric> $AgentMetrics
 * @property list<Shapes\Model> $Models
 * @property string $AgentVersion
 * @property string $DeviceName
 * @property string $DeviceFleetName
 * @property Shapes\DeploymentResult $DeploymentResult
 */
class SendHeartbeatRequest extends Request
{
    /**
     * @param array{
     *     AgentMetrics?: list<Shapes\EdgeMetric>,
     *     Models?: list<Shapes\Model>,
     *     AgentVersion: string,
     *     DeviceName: string,
     *     DeviceFleetName: string,
     *     DeploymentResult?: Shapes\DeploymentResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
