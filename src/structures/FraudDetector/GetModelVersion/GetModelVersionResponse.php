<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetModelVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 * @property string $modelVersionNumber
 * @property 'EXTERNAL_EVENTS'|'INGESTED_EVENTS' $trainingDataSource
 * @property Shapes\TrainingDataSchema $trainingDataSchema
 * @property Shapes\ExternalEventsDetail $externalEventsDetail
 * @property Shapes\IngestedEventsDetail $ingestedEventsDetail
 * @property string $status
 * @property string $arn
 */
class GetModelVersionResponse extends Response
{
}
