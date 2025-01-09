<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkResourceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property DnsEntry $dnsEntry
 * @property string $failureCode
 * @property string $id
 * @property bool $isManagedAssociation
 * @property DnsEntry $privateDnsEntry
 * @property string $resourceConfigurationArn
 * @property string $resourceConfigurationId
 * @property string $resourceConfigurationName
 * @property string $serviceNetworkArn
 * @property string $serviceNetworkId
 * @property string $serviceNetworkName
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'PARTIAL'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 */
class ServiceNetworkResourceAssociationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     dnsEntry?: DnsEntry,
     *     failureCode?: string,
     *     id?: string,
     *     isManagedAssociation?: bool,
     *     privateDnsEntry?: DnsEntry,
     *     resourceConfigurationArn?: string,
     *     resourceConfigurationId?: string,
     *     resourceConfigurationName?: string,
     *     serviceNetworkArn?: string,
     *     serviceNetworkId?: string,
     *     serviceNetworkName?: string,
     *     status?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'PARTIAL'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
