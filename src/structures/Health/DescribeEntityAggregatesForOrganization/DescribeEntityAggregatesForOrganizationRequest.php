<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregatesForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $eventArns
 * @property list<string>|null $awsAccountIds
 * @property Shapes\OrganizationEntityAggregateFilter|null $filter
 */
class DescribeEntityAggregatesForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     eventArns: list<string>,
     *     awsAccountIds?: list<string>|null,
     *     filter?: Shapes\OrganizationEntityAggregateFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
