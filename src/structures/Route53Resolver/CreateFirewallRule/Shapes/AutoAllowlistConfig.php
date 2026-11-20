<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 168> $InitialDataTimeframeHours
 * @property string|null $ImportFromFirewallDomainListId
 * @property string|null $AutoAllowlistFirewallDomainListId
 */
class AutoAllowlistConfig extends Shape
{
    /**
     * @param array{
     *     InitialDataTimeframeHours: int<1, 168>,
     *     ImportFromFirewallDomainListId?: string|null,
     *     AutoAllowlistFirewallDomainListId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
