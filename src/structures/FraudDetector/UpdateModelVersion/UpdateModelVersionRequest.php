<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateModelVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 * @property string $majorVersionNumber
 * @property Shapes\ExternalEventsDetail $externalEventsDetail
 * @property Shapes\IngestedEventsDetail $ingestedEventsDetail
 * @property list<Shapes\Tag> $tags
 */
class UpdateModelVersionRequest extends Request
{
    /**
     * @param array{
     *     modelId: string,
     *     modelType: 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS',
     *     majorVersionNumber: string,
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
