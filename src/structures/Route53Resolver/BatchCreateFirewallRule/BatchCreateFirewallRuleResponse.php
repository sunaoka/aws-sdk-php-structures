<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\BatchCreateFirewallRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FirewallRule>|null $CreatedFirewallRules
 * @property list<Shapes\BatchCreateFirewallRuleError>|null $CreateErrors
 */
class BatchCreateFirewallRuleResponse extends Response
{
}
