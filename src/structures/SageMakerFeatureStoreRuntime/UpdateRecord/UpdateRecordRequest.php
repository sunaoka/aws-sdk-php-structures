<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\UpdateRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property string $RecordIdentifierValueAsString
 * @property list<Shapes\FeatureValue> $Features
 * @property list<'OnlineStore'|'OfflineStore'>|null $TargetStores
 * @property Shapes\TtlDuration|null $TtlDuration
 */
class UpdateRecordRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     RecordIdentifierValueAsString: string,
     *     Features: list<Shapes\FeatureValue>,
     *     TargetStores?: list<'OnlineStore'|'OfflineStore'>|null,
     *     TtlDuration?: Shapes\TtlDuration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
