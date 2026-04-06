<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\BatchUpdateMemoryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryRecordId
 * @property 'SUCCEEDED'|'FAILED' $status
 * @property string|null $requestIdentifier
 * @property int|null $errorCode
 * @property string|null $errorMessage
 */
class MemoryRecordOutput extends Shape
{
    /**
     * @param array{
     *     memoryRecordId: string,
     *     status: 'SUCCEEDED'|'FAILED',
     *     requestIdentifier?: string|null,
     *     errorCode?: int|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
