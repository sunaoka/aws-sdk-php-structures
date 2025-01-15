<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS'|null $modelType
 * @property string|null $modelVersionNumber
 * @property string|null $status
 * @property 'EXTERNAL_EVENTS'|'INGESTED_EVENTS'|null $trainingDataSource
 * @property TrainingDataSchema|null $trainingDataSchema
 * @property ExternalEventsDetail|null $externalEventsDetail
 * @property IngestedEventsDetail|null $ingestedEventsDetail
 * @property TrainingResult|null $trainingResult
 * @property string|null $lastUpdatedTime
 * @property string|null $createdTime
 * @property string|null $arn
 * @property TrainingResultV2|null $trainingResultV2
 */
class ModelVersionDetail extends Shape
{
    /**
     * @param array{
     *     modelId?: string|null,
     *     modelType?: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS'|null,
     *     modelVersionNumber?: string|null,
     *     status?: string|null,
     *     trainingDataSource?: 'EXTERNAL_EVENTS'|'INGESTED_EVENTS'|null,
     *     trainingDataSchema?: TrainingDataSchema|null,
     *     externalEventsDetail?: ExternalEventsDetail|null,
     *     ingestedEventsDetail?: IngestedEventsDetail|null,
     *     trainingResult?: TrainingResult|null,
     *     lastUpdatedTime?: string|null,
     *     createdTime?: string|null,
     *     arn?: string|null,
     *     trainingResultV2?: TrainingResultV2|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
