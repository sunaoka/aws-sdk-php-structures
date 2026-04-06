<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchCreateMemoryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property list<Shapes\MemoryRecordCreateInput> $records
 * @property string|null $clientToken
 */
class BatchCreateMemoryRecordsRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     records: list<Shapes\MemoryRecordCreateInput>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
