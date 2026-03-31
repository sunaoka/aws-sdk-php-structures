<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListPrivateConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'SELF_MANAGED'|'SERVICE_MANAGED' $type
 * @property string|null $resourceGatewayId
 * @property string|null $hostAddress
 * @property string|null $vpcId
 * @property string|null $resourceConfigurationId
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 * @property \Aws\Api\DateTimeResult|null $certificateExpiryTime
 */
class PrivateConnectionSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'SELF_MANAGED'|'SERVICE_MANAGED',
     *     resourceGatewayId?: string|null,
     *     hostAddress?: string|null,
     *     vpcId?: string|null,
     *     resourceConfigurationId?: string|null,
     *     status: 'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED',
     *     certificateExpiryTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
