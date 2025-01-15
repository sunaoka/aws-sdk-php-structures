<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS'|null $modelType
 * @property string|null $description
 * @property string|null $eventTypeName
 * @property string|null $createdTime
 * @property string|null $lastUpdatedTime
 * @property string|null $arn
 */
class Model extends Shape
{
    /**
     * @param array{
     *     modelId?: string|null,
     *     modelType?: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS'|null,
     *     description?: string|null,
     *     eventTypeName?: string|null,
     *     createdTime?: string|null,
     *     lastUpdatedTime?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
