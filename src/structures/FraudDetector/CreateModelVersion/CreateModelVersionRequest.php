<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateModelVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 * @property 'EXTERNAL_EVENTS'|'INGESTED_EVENTS' $trainingDataSource
 * @property Shapes\TrainingDataSchema $trainingDataSchema
 * @property Shapes\ExternalEventsDetail $externalEventsDetail
 * @property Shapes\IngestedEventsDetail $ingestedEventsDetail
 * @property list<Shapes\Tag> $tags
 */
class CreateModelVersionRequest extends Request
{
    /**
     * @param array{
     *     modelId: string,
     *     modelType: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS',
     *     trainingDataSource: 'EXTERNAL_EVENTS'|'INGESTED_EVENTS',
     *     trainingDataSchema: Shapes\TrainingDataSchema,
     *     externalEventsDetail?: Shapes\ExternalEventsDetail,
     *     ingestedEventsDetail?: Shapes\IngestedEventsDetail,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
