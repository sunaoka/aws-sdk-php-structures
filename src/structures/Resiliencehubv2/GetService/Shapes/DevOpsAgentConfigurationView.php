<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentSpaceArn
 * @property string|null $agentSpaceId
 * @property string|null $region
 * @property 'CONNECTING'|'CONNECTED'|'DISCONNECTED'|'FAILED'|null $status
 * @property string|null $operatorAppUrl
 * @property \Aws\Api\DateTimeResult|null $connectedAt
 * @property string|null $statusReason
 */
class DevOpsAgentConfigurationView extends Shape
{
    /**
     * @param array{
     *     agentSpaceArn?: string|null,
     *     agentSpaceId?: string|null,
     *     region?: string|null,
     *     status?: 'CONNECTING'|'CONNECTED'|'DISCONNECTED'|'FAILED'|null,
     *     operatorAppUrl?: string|null,
     *     connectedAt?: \Aws\Api\DateTimeResult|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
