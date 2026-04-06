<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutAccountPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $policyDocument
 * @property 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY'|'METRIC_EXTRACTION_POLICY' $policyType
 * @property 'ALL'|null $scope
 * @property string|null $selectionCriteria
 */
class PutAccountPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     policyDocument: string,
     *     policyType: 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY'|'METRIC_EXTRACTION_POLICY',
     *     scope?: 'ALL'|null,
     *     selectionCriteria?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
