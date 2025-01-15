<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $customDomainName
 * @property DnsEntry|null $dnsEntry
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 */
class ServiceSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     customDomainName?: string|null,
     *     dnsEntry?: DnsEntry|null,
     *     id?: string|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
