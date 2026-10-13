<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchUpdateMemoryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property list<Shapes\MemoryRecordUpdateInput> $records
 * @property Shapes\RecordExpirySpecification|null $recordExpirySpecification
 */
class BatchUpdateMemoryRecordsRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     records: list<Shapes\MemoryRecordUpdateInput>,
     *     recordExpirySpecification?: Shapes\RecordExpirySpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
