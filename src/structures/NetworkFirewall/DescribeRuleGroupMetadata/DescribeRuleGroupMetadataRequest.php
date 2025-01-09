<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroupMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleGroupName
 * @property string $RuleGroupArn
 * @property 'STATELESS'|'STATEFUL' $Type
 */
class DescribeRuleGroupMetadataRequest extends Request
{
    /**
     * @param array{
     *     RuleGroupName?: string,
     *     RuleGroupArn?: string,
     *     Type?: 'STATELESS'|'STATEFUL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
