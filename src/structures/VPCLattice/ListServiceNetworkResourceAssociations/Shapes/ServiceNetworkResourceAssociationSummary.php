<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkResourceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'PARTIAL'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $resourceConfigurationId
 * @property string|null $resourceConfigurationArn
 * @property string|null $resourceConfigurationName
 * @property string|null $serviceNetworkId
 * @property string|null $serviceNetworkArn
 * @property string|null $serviceNetworkName
 * @property DnsEntry|null $dnsEntry
 * @property DnsEntry|null $privateDnsEntry
 * @property bool|null $isManagedAssociation
 * @property string|null $failureCode
 */
class ServiceNetworkResourceAssociationSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     status?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'PARTIAL'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null,
     *     createdBy?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     resourceConfigurationId?: string|null,
     *     resourceConfigurationArn?: string|null,
     *     resourceConfigurationName?: string|null,
     *     serviceNetworkId?: string|null,
     *     serviceNetworkArn?: string|null,
     *     serviceNetworkName?: string|null,
     *     dnsEntry?: DnsEntry|null,
     *     privateDnsEntry?: DnsEntry|null,
     *     isManagedAssociation?: bool|null,
     *     failureCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
