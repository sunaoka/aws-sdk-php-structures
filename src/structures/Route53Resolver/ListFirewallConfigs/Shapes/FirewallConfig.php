<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ResourceId
 * @property string $OwnerId
 * @property 'ENABLED'|'DISABLED'|'USE_LOCAL_RESOURCE_SETTING' $FirewallFailOpen
 */
class FirewallConfig extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ResourceId?: string,
     *     OwnerId?: string,
     *     FirewallFailOpen?: 'ENABLED'|'DISABLED'|'USE_LOCAL_RESOURCE_SETTING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
