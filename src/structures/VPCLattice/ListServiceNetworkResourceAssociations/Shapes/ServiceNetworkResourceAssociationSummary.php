<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkResourceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property DnsEntry|null $dnsEntry
 * @property string|null $failureCode
 * @property string|null $id
 * @property bool|null $isManagedAssociation
 * @property DnsEntry|null $privateDnsEntry
 * @property string|null $resourceConfigurationArn
 * @property string|null $resourceConfigurationId
 * @property string|null $resourceConfigurationName
 * @property string|null $serviceNetworkArn
 * @property string|null $serviceNetworkId
 * @property string|null $serviceNetworkName
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'PARTIAL'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 */
class ServiceNetworkResourceAssociationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     dnsEntry?: DnsEntry|null,
     *     failureCode?: string|null,
     *     id?: string|null,
     *     isManagedAssociation?: bool|null,
     *     privateDnsEntry?: DnsEntry|null,
     *     resourceConfigurationArn?: string|null,
     *     resourceConfigurationId?: string|null,
     *     resourceConfigurationName?: string|null,
     *     serviceNetworkArn?: string|null,
     *     serviceNetworkId?: string|null,
     *     serviceNetworkName?: string|null,
     *     status?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'PARTIAL'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
