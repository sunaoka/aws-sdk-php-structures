<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\UpdateNetworkSite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $availabilityZone
 * @property string|null $availabilityZoneId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property SitePlan|null $currentPlan
 * @property string|null $description
 * @property string $networkArn
 * @property string $networkSiteArn
 * @property string $networkSiteName
 * @property SitePlan|null $pendingPlan
 * @property 'CREATED'|'PROVISIONING'|'AVAILABLE'|'DEPROVISIONING'|'DELETED' $status
 * @property string|null $statusReason
 */
class NetworkSite extends Shape
{
    /**
     * @param array{
     *     availabilityZone?: string|null,
     *     availabilityZoneId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     currentPlan?: SitePlan|null,
     *     description?: string|null,
     *     networkArn: string,
     *     networkSiteArn: string,
     *     networkSiteName: string,
     *     pendingPlan?: SitePlan|null,
     *     status: 'CREATED'|'PROVISIONING'|'AVAILABLE'|'DEPROVISIONING'|'DELETED',
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
