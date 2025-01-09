<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateModelVersionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 * @property string $modelVersionNumber
 * @property 'ACTIVE'|'INACTIVE'|'TRAINING_CANCELLED' $status
 */
class UpdateModelVersionStatusRequest extends Request
{
    /**
     * @param array{
     *     modelId: string,
     *     modelType: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS',
     *     modelVersionNumber: string,
     *     status: 'ACTIVE'|'INACTIVE'|'TRAINING_CANCELLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
