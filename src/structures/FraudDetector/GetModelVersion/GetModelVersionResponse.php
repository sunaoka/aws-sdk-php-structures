<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetModelVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS'|null $modelType
 * @property string|null $modelVersionNumber
 * @property 'EXTERNAL_EVENTS'|'INGESTED_EVENTS'|null $trainingDataSource
 * @property Shapes\TrainingDataSchema|null $trainingDataSchema
 * @property Shapes\ExternalEventsDetail|null $externalEventsDetail
 * @property Shapes\IngestedEventsDetail|null $ingestedEventsDetail
 * @property string|null $status
 * @property string|null $arn
 */
class GetModelVersionResponse extends Response
{
}
