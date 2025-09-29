<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property DnsEntry|null $dnsEntry
 * @property string|null $customDomainName
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 */
class ServiceSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     dnsEntry?: DnsEntry|null,
     *     customDomainName?: string|null,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
