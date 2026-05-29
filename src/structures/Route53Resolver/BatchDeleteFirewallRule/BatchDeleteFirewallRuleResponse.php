<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchDeleteFirewallRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FirewallRule>|null $DeletedFirewallRules
 * @property list<Shapes\BatchDeleteFirewallRuleError>|null $DeleteErrors
 */
class BatchDeleteFirewallRuleResponse extends Response
{
}
