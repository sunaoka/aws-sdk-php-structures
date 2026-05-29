<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateFirewallRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Category
 */
class FirewallAdvancedContentCategoryConfig extends Shape
{
    /**
     * @param array{Category: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
