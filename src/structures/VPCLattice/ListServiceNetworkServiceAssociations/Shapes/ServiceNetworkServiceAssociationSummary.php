<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkServiceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $customDomainName
 * @property DnsEntry|null $dnsEntry
 * @property string|null $id
 * @property string|null $serviceArn
 * @property string|null $serviceId
 * @property string|null $serviceName
 * @property string|null $serviceNetworkArn
 * @property string|null $serviceNetworkId
 * @property string|null $serviceNetworkName
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 */
class ServiceNetworkServiceAssociationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     customDomainName?: string|null,
     *     dnsEntry?: DnsEntry|null,
     *     id?: string|null,
     *     serviceArn?: string|null,
     *     serviceId?: string|null,
     *     serviceName?: string|null,
     *     serviceNetworkArn?: string|null,
     *     serviceNetworkId?: string|null,
     *     serviceNetworkName?: string|null,
     *     status?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
