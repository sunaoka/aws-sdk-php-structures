<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRuleDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OBSERVED'|'ALLOWED'|'DENIED'|null $DomainStatus
 * @property 'TIME_ADDED'|'DAILY_TOTAL'|'TOTAL_REQUESTS'|null $SortBy
 * @property 'ASC'|'DESC'|null $SortOrder
 * @property string|null $DomainNameFilter
 */
class ListFirewallRuleDomainsQueryOptions extends Shape
{
    /**
     * @param array{
     *     DomainStatus?: 'OBSERVED'|'ALLOWED'|'DENIED'|null,
     *     SortBy?: 'TIME_ADDED'|'DAILY_TOTAL'|'TOTAL_REQUESTS'|null,
     *     SortOrder?: 'ASC'|'DESC'|null,
     *     DomainNameFilter?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
