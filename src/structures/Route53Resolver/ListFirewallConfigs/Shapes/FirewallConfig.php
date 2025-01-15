<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $ResourceId
 * @property string|null $OwnerId
 * @property 'ENABLED'|'DISABLED'|'USE_LOCAL_RESOURCE_SETTING'|null $FirewallFailOpen
 */
class FirewallConfig extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ResourceId?: string|null,
     *     OwnerId?: string|null,
     *     FirewallFailOpen?: 'ENABLED'|'DISABLED'|'USE_LOCAL_RESOURCE_SETTING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
