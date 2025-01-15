<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeAccountPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY' $policyType
 * @property string|null $policyName
 * @property list<string>|null $accountIdentifiers
 * @property string|null $nextToken
 */
class DescribeAccountPoliciesRequest extends Request
{
    /**
     * @param array{
     *     policyType: 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY',
     *     policyName?: string|null,
     *     accountIdentifiers?: list<string>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
