<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PublicRouterNetworkInterfaceRule> $AllowRules
 */
class PublicRouterNetworkInterfaceConfiguration extends Shape
{
    /**
     * @param array{AllowRules: list<PublicRouterNetworkInterfaceRule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
