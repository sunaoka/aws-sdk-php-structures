<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutAccountPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyName
 * @property string $policyDocument
 * @property int<0, max> $lastUpdatedTime
 * @property 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY' $policyType
 * @property 'ALL' $scope
 * @property string $selectionCriteria
 * @property string $accountId
 */
class AccountPolicy extends Shape
{
    /**
     * @param array{
     *     policyName?: string,
     *     policyDocument?: string,
     *     lastUpdatedTime?: int<0, max>,
     *     policyType?: 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY',
     *     scope?: 'ALL',
     *     selectionCriteria?: string,
     *     accountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
