<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregatesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property int|null $count
 * @property array<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED', int>|null $statuses
 */
class AccountEntityAggregate extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     count?: int|null,
     *     statuses?: array<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED', int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
