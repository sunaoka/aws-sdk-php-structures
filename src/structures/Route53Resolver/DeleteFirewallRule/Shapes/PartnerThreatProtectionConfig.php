<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Partner
 */
class PartnerThreatProtectionConfig extends Shape
{
    /**
     * @param array{Partner: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
