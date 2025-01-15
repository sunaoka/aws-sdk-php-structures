<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS'|null $modelType
 * @property string|null $nextToken
 * @property int<1, 10>|null $maxResults
 */
class GetModelsRequest extends Request
{
    /**
     * @param array{
     *     modelId?: string|null,
     *     modelType?: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
