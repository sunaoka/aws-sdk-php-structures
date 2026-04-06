<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateProxyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProxyConfigurationName
 * @property string|null $Description
 * @property list<string>|null $RuleGroupNames
 * @property list<string>|null $RuleGroupArns
 * @property Shapes\ProxyConfigDefaultRulePhaseActionsRequest $DefaultRulePhaseActions
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateProxyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ProxyConfigurationName: string,
     *     Description?: string|null,
     *     RuleGroupNames?: list<string>|null,
     *     RuleGroupArns?: list<string>|null,
     *     DefaultRulePhaseActions: Shapes\ProxyConfigDefaultRulePhaseActionsRequest,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
