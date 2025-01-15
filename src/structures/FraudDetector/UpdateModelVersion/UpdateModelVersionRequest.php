<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateModelVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 * @property string $majorVersionNumber
 * @property Shapes\ExternalEventsDetail|null $externalEventsDetail
 * @property Shapes\IngestedEventsDetail|null $ingestedEventsDetail
 * @property list<Shapes\Tag>|null $tags
 */
class UpdateModelVersionRequest extends Request
{
    /**
     * @param array{
     *     modelId: string,
     *     modelType: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS',
     *     majorVersionNumber: string,
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
