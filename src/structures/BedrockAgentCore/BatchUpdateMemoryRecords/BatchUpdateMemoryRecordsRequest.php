<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchUpdateMemoryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property list<Shapes\MemoryRecordUpdateInput> $records
 */
class BatchUpdateMemoryRecordsRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     records: list<Shapes\MemoryRecordUpdateInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
