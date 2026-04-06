<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPolicyAllocationRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPolicyId
 * @property string $Locale
 * @property 'alb'|'eip'|'rds'|'rnat' $ResourceType
 * @property list<Shapes\IpamPolicyAllocationRuleRequest>|null $AllocationRules
 */
class ModifyIpamPolicyAllocationRulesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPolicyId: string,
     *     Locale: string,
     *     ResourceType: 'alb'|'eip'|'rds'|'rnat',
     *     AllocationRules?: list<Shapes\IpamPolicyAllocationRuleRequest>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
