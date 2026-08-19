<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteMemoryRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property string $memoryRecordId
 * @property string|null $namespace
 */
class DeleteMemoryRecordRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     memoryRecordId: string,
     *     namespace?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
