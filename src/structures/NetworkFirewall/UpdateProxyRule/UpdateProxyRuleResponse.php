<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ProxyRule|null $ProxyRule
 * @property list<Shapes\ProxyRuleCondition>|null $RemovedConditions
 * @property string|null $UpdateToken
 */
class UpdateProxyRuleResponse extends Response
{
}
