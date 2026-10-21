<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REJECT'|'DROP'|'ALERT' $Action
 * @property string $DNSFirewallRuleGroupId
 * @property 'REJECT'|'DROP'|'CONTINUE' $DNSExpiryExceptionPolicy
 * @property list<Address>|null $BypassDestinationValidationIPRanges
 * @property list<Address>|null $SourceIPRanges
 */
class Route53ResolvedIPValidation extends Shape
{
    /**
     * @param array{
     *     Action: 'REJECT'|'DROP'|'ALERT',
     *     DNSFirewallRuleGroupId: string,
     *     DNSExpiryExceptionPolicy: 'REJECT'|'DROP'|'CONTINUE',
     *     BypassDestinationValidationIPRanges?: list<Address>|null,
     *     SourceIPRanges?: list<Address>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
