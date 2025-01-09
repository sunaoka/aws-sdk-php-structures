<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeAccountPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY' $policyType
 * @property string $policyName
 * @property list<string> $accountIdentifiers
 * @property string $nextToken
 */
class DescribeAccountPoliciesRequest extends Request
{
    /**
     * @param array{
     *     policyType: 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY',
     *     policyName?: string,
     *     accountIdentifiers?: list<string>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
