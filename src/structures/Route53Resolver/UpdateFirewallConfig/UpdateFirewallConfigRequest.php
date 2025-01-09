<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateFirewallConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property 'ENABLED'|'DISABLED'|'USE_LOCAL_RESOURCE_SETTING' $FirewallFailOpen
 */
class UpdateFirewallConfigRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     FirewallFailOpen: 'ENABLED'|'DISABLED'|'USE_LOCAL_RESOURCE_SETTING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
