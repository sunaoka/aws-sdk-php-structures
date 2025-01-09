<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetNetworkSite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $availabilityZone
 * @property string $availabilityZoneId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property SitePlan $currentPlan
 * @property string $description
 * @property string $networkArn
 * @property string $networkSiteArn
 * @property string $networkSiteName
 * @property SitePlan $pendingPlan
 * @property 'CREATED'|'PROVISIONING'|'AVAILABLE'|'DEPROVISIONING'|'DELETED' $status
 * @property string $statusReason
 */
class NetworkSite extends Shape
{
    /**
     * @param array{
     *     availabilityZone?: string,
     *     availabilityZoneId?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     currentPlan?: SitePlan,
     *     description?: string,
     *     networkArn: string,
     *     networkSiteArn: string,
     *     networkSiteName: string,
     *     pendingPlan?: SitePlan,
     *     status: 'CREATED'|'PROVISIONING'|'AVAILABLE'|'DEPROVISIONING'|'DELETED',
     *     statusReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
