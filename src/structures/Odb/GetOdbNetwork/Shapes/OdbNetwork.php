<?php

namespace Sunaoka\Aws\Structures\Odb\GetOdbNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $odbNetworkId
 * @property string|null $displayName
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null $status
 * @property string|null $statusReason
 * @property string|null $odbNetworkArn
 * @property string|null $availabilityZone
 * @property string|null $availabilityZoneId
 * @property string|null $clientSubnetCidr
 * @property string|null $backupSubnetCidr
 * @property string|null $customDomainName
 * @property string|null $defaultDnsPrefix
 * @property list<string>|null $peeredCidrs
 * @property string|null $ociNetworkAnchorId
 * @property string|null $ociNetworkAnchorUrl
 * @property string|null $ociResourceAnchorName
 * @property string|null $ociVcnId
 * @property string|null $ociVcnUrl
 * @property list<OciDnsForwardingConfig>|null $ociDnsForwardingConfigs
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property float|null $percentProgress
 * @property ManagedServices|null $managedServices
 */
class OdbNetwork extends Shape
{
    /**
     * @param array{
     *     odbNetworkId: string,
     *     displayName?: string|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null,
     *     statusReason?: string|null,
     *     odbNetworkArn?: string|null,
     *     availabilityZone?: string|null,
     *     availabilityZoneId?: string|null,
     *     clientSubnetCidr?: string|null,
     *     backupSubnetCidr?: string|null,
     *     customDomainName?: string|null,
     *     defaultDnsPrefix?: string|null,
     *     peeredCidrs?: list<string>|null,
     *     ociNetworkAnchorId?: string|null,
     *     ociNetworkAnchorUrl?: string|null,
     *     ociResourceAnchorName?: string|null,
     *     ociVcnId?: string|null,
     *     ociVcnUrl?: string|null,
     *     ociDnsForwardingConfigs?: list<OciDnsForwardingConfig>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     percentProgress?: float|null,
     *     managedServices?: ManagedServices|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
