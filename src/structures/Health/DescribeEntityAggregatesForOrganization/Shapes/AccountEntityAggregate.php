<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregatesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property int $count
 * @property array<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED', int> $statuses
 */
class AccountEntityAggregate extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     count?: int,
     *     statuses?: array<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED', int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
