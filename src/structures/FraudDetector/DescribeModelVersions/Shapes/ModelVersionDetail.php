<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 * @property string $modelVersionNumber
 * @property string $status
 * @property 'EXTERNAL_EVENTS'|'INGESTED_EVENTS' $trainingDataSource
 * @property TrainingDataSchema $trainingDataSchema
 * @property ExternalEventsDetail $externalEventsDetail
 * @property IngestedEventsDetail $ingestedEventsDetail
 * @property TrainingResult $trainingResult
 * @property string $lastUpdatedTime
 * @property string $createdTime
 * @property string $arn
 * @property TrainingResultV2 $trainingResultV2
 */
class ModelVersionDetail extends Shape
{
    /**
     * @param array{
     *     modelId?: string,
     *     modelType?: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS',
     *     modelVersionNumber?: string,
     *     status?: string,
     *     trainingDataSource?: 'EXTERNAL_EVENTS'|'INGESTED_EVENTS',
     *     trainingDataSchema?: TrainingDataSchema,
     *     externalEventsDetail?: ExternalEventsDetail,
     *     ingestedEventsDetail?: IngestedEventsDetail,
     *     trainingResult?: TrainingResult,
     *     lastUpdatedTime?: string,
     *     createdTime?: string,
     *     arn?: string,
     *     trainingResultV2?: TrainingResultV2
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
