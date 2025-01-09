<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\PutRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property list<Shapes\FeatureValue> $Record
 * @property list<'OnlineStore'|'OfflineStore'> $TargetStores
 * @property Shapes\TtlDuration $TtlDuration
 */
class PutRecordRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     Record: list<Shapes\FeatureValue>,
     *     TargetStores?: list<'OnlineStore'|'OfflineStore'>,
     *     TtlDuration?: Shapes\TtlDuration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
