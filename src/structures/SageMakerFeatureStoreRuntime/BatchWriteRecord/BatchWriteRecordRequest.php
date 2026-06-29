<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchWriteRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchWriteRecordEntry> $Entries
 * @property Shapes\TtlDuration|null $TtlDuration
 */
class BatchWriteRecordRequest extends Request
{
    /**
     * @param array{
     *     Entries: list<Shapes\BatchWriteRecordEntry>,
     *     TtlDuration?: Shapes\TtlDuration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
