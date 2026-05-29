<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchUpdateFirewallRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FirewallRule>|null $UpdatedFirewallRules
 * @property list<Shapes\BatchUpdateFirewallRuleError>|null $UpdateErrors
 */
class BatchUpdateFirewallRuleResponse extends Response
{
}
