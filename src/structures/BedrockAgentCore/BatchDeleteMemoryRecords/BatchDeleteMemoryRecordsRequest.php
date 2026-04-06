<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchDeleteMemoryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property list<Shapes\MemoryRecordDeleteInput> $records
 */
class BatchDeleteMemoryRecordsRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     records: list<Shapes\MemoryRecordDeleteInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
