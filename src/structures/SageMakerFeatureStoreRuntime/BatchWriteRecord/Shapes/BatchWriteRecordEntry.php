<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchWriteRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureGroupName
 * @property list<FeatureValue> $Record
 * @property list<'OnlineStore'|'OfflineStore'>|null $TargetStores
 * @property TtlDuration|null $TtlDuration
 */
class BatchWriteRecordEntry extends Shape
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     Record: list<FeatureValue>,
     *     TargetStores?: list<'OnlineStore'|'OfflineStore'>|null,
     *     TtlDuration?: TtlDuration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
