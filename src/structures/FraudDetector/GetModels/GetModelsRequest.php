<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 * @property string $nextToken
 * @property int<1, 10> $maxResults
 */
class GetModelsRequest extends Request
{
    /**
     * @param array{
     *     modelId?: string,
     *     modelType?: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS',
     *     nextToken?: string,
     *     maxResults?: int<1, 10>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
