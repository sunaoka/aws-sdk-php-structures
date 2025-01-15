<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateDetectorVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 * @property string $modelVersionNumber
 * @property string|null $arn
 */
class ModelVersion extends Shape
{
    /**
     * @param array{
     *     modelId: string,
     *     modelType: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS',
     *     modelVersionNumber: string,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
