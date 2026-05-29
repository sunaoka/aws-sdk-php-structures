<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Category
 */
class FirewallAdvancedThreatCategoryConfig extends Shape
{
    /**
     * @param array{Category: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
