<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkServiceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property string|null $arn
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $serviceId
 * @property string|null $serviceName
 * @property string|null $serviceArn
 * @property string|null $serviceNetworkId
 * @property string|null $serviceNetworkName
 * @property string|null $serviceNetworkArn
 * @property DnsEntry|null $dnsEntry
 * @property string|null $customDomainName
 */
class ServiceNetworkServiceAssociationSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     status?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null,
     *     arn?: string|null,
     *     createdBy?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     serviceId?: string|null,
     *     serviceName?: string|null,
     *     serviceArn?: string|null,
     *     serviceNetworkId?: string|null,
     *     serviceNetworkName?: string|null,
     *     serviceNetworkArn?: string|null,
     *     dnsEntry?: DnsEntry|null,
     *     customDomainName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
