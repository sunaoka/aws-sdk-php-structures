<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRuleDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property 'OBSERVED'|'ALLOWED'|'DENIED'|'UNKNOWN'|null $DomainStatus
 * @property int|null $Last24HourRequests
 * @property int|null $TotalRequests
 * @property string|null $AddedTime
 */
class FirewallRuleDomain extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     DomainStatus?: 'OBSERVED'|'ALLOWED'|'DENIED'|'UNKNOWN'|null,
     *     Last24HourRequests?: int|null,
     *     TotalRequests?: int|null,
     *     AddedTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
