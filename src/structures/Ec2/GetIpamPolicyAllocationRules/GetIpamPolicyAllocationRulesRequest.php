<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPolicyAllocationRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPolicyId
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $Locale
 * @property 'alb'|'eip'|'rds'|'rnat'|null $ResourceType
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetIpamPolicyAllocationRulesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPolicyId: string,
     *     Filters?: list<Shapes\Filter>|null,
     *     Locale?: string|null,
     *     ResourceType?: 'alb'|'eip'|'rds'|'rnat'|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
