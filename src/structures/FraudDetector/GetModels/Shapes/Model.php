<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 * @property string $description
 * @property string $eventTypeName
 * @property string $createdTime
 * @property string $lastUpdatedTime
 * @property string $arn
 */
class Model extends Shape
{
    /**
     * @param array{
     *     modelId?: string,
     *     modelType?: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS',
     *     description?: string,
     *     eventTypeName?: string,
     *     createdTime?: string,
     *     lastUpdatedTime?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
