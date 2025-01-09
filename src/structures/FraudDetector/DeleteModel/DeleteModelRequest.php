<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 */
class DeleteModelRequest extends Request
{
    /**
     * @param array{
     *     modelId: string,
     *     modelType: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
