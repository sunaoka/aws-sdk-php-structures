<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property string $modelVersionNumber
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 * @property string $nextToken
 * @property int $maxResults
 */
class DescribeModelVersionsRequest extends Request
{
    /**
     * @param array{
     *     modelId?: string,
     *     modelVersionNumber?: string,
     *     modelType?: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
