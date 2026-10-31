<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteAccountPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY'|'METRIC_EXTRACTION_POLICY'|'RETENTION_POLICY' $policyType
 * @property bool|null $dryRun
 */
class DeleteAccountPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     policyType: 'DATA_PROTECTION_POLICY'|'SUBSCRIPTION_FILTER_POLICY'|'FIELD_INDEX_POLICY'|'TRANSFORMER_POLICY'|'METRIC_EXTRACTION_POLICY'|'RETENTION_POLICY',
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
