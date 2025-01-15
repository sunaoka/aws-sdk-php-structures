<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeAccountPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policyName
 * @property string|null $policyDocument
 * @property int<0, max>|null $lastUpdatedTime
 * @property 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY'|null $policyType
 * @property 'ALL'|null $scope
 * @property string|null $selectionCriteria
 * @property string|null $accountId
 */
class AccountPolicy extends Shape
{
    /**
     * @param array{
     *     policyName?: string|null,
     *     policyDocument?: string|null,
     *     lastUpdatedTime?: int<0, max>|null,
     *     policyType?: 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY'|null,
     *     scope?: 'ALL'|null,
     *     selectionCriteria?: string|null,
     *     accountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
