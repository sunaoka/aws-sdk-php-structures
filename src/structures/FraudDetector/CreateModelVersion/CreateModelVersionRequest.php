<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateModelVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 * @property 'EXTERNAL_EVENTS'|'INGESTED_EVENTS' $trainingDataSource
 * @property Shapes\TrainingDataSchema $trainingDataSchema
 * @property Shapes\ExternalEventsDetail|null $externalEventsDetail
 * @property Shapes\IngestedEventsDetail|null $ingestedEventsDetail
 * @property list<Shapes\Tag>|null $tags
 */
class CreateModelVersionRequest extends Request
{
    /**
     * @param array{
     *     modelId: string,
     *     modelType: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS',
     *     trainingDataSource: 'EXTERNAL_EVENTS'|'INGESTED_EVENTS',
     *     trainingDataSchema: Shapes\TrainingDataSchema,
     *     externalEventsDetail?: Shapes\ExternalEventsDetail|null,
     *     ingestedEventsDetail?: Shapes\IngestedEventsDetail|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
