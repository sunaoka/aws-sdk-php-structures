<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkServiceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $customDomainName
 * @property DnsEntry $dnsEntry
 * @property string $id
 * @property string $serviceArn
 * @property string $serviceId
 * @property string $serviceName
 * @property string $serviceNetworkArn
 * @property string $serviceNetworkId
 * @property string $serviceNetworkName
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 */
class ServiceNetworkServiceAssociationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     customDomainName?: string,
     *     dnsEntry?: DnsEntry,
     *     id?: string,
     *     serviceArn?: string,
     *     serviceId?: string,
     *     serviceName?: string,
     *     serviceNetworkArn?: string,
     *     serviceNetworkId?: string,
     *     serviceNetworkName?: string,
     *     status?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
