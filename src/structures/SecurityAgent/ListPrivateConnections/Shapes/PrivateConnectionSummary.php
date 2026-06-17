<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListPrivateConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'SERVICE_MANAGED'|'SELF_MANAGED' $type
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 * @property string|null $resourceGatewayId
 * @property string|null $hostAddress
 * @property string|null $vpcId
 * @property string|null $resourceConfigurationId
 * @property \Aws\Api\DateTimeResult|null $certificateExpiryTime
 * @property 'PUBLIC'|'IN_VPC'|null $dnsResolution
 * @property string|null $failureMessage
 * @property array<string, string>|null $tags
 */
class PrivateConnectionSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'SERVICE_MANAGED'|'SELF_MANAGED',
     *     status: 'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED',
     *     resourceGatewayId?: string|null,
     *     hostAddress?: string|null,
     *     vpcId?: string|null,
     *     resourceConfigurationId?: string|null,
     *     certificateExpiryTime?: \Aws\Api\DateTimeResult|null,
     *     dnsResolution?: 'PUBLIC'|'IN_VPC'|null,
     *     failureMessage?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
