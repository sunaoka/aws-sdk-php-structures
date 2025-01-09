<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutAccountPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $policyDocument
 * @property 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY' $policyType
 * @property 'ALL' $scope
 * @property string $selectionCriteria
 */
class PutAccountPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     policyDocument: string,
     *     policyType: 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY',
     *     scope?: 'ALL',
     *     selectionCriteria?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
