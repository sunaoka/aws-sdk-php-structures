<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $customDomainName
 * @property DnsEntry $dnsEntry
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 */
class ServiceSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     customDomainName?: string,
     *     dnsEntry?: DnsEntry,
     *     id?: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
