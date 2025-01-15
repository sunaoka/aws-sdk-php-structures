<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregatesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventArn
 * @property int|null $count
 * @property array<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED', int>|null $statuses
 * @property list<AccountEntityAggregate>|null $accounts
 */
class OrganizationEntityAggregate extends Shape
{
    /**
     * @param array{
     *     eventArn?: string|null,
     *     count?: int|null,
     *     statuses?: array<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED', int>|null,
     *     accounts?: list<AccountEntityAggregate>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
