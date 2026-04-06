<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyRulePriorities;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ProxyRuleGroupName
 * @property string|null $ProxyRuleGroupArn
 * @property 'PRE_DNS'|'PRE_REQ'|'POST_RES'|null $RuleGroupRequestPhase
 * @property list<Shapes\ProxyRulePriority>|null $Rules
 * @property string|null $UpdateToken
 */
class UpdateProxyRulePrioritiesResponse extends Response
{
}
