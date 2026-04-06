<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteAccountPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY' $policyType
 */
class DeleteAccountPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     policyType: 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
