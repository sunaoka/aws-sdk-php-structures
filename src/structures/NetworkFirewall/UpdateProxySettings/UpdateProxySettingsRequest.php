<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxySettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property string|null $UpdateToken
 * @property Shapes\ProxySettings|null $ProxySettings
 */
class UpdateProxySettingsRequest extends Request
{
    /**
     * @param array{
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     UpdateToken?: string|null,
     *     ProxySettings?: Shapes\ProxySettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
