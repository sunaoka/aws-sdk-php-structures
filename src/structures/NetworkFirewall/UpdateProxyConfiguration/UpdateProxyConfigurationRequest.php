<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProxyConfigurationName
 * @property string|null $ProxyConfigurationArn
 * @property Shapes\ProxyConfigDefaultRulePhaseActionsRequest $DefaultRulePhaseActions
 * @property string $UpdateToken
 */
class UpdateProxyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ProxyConfigurationName?: string|null,
     *     ProxyConfigurationArn?: string|null,
     *     DefaultRulePhaseActions: Shapes\ProxyConfigDefaultRulePhaseActionsRequest,
     *     UpdateToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
