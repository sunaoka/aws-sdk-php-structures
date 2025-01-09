<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregatesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventArn
 * @property int $count
 * @property array<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED', int> $statuses
 * @property list<AccountEntityAggregate> $accounts
 */
class OrganizationEntityAggregate extends Shape
{
    /**
     * @param array{
     *     eventArn?: string,
     *     count?: int,
     *     statuses?: array<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED', int>,
     *     accounts?: list<AccountEntityAggregate>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
