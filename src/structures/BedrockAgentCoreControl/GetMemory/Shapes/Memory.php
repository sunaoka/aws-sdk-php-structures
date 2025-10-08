<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property string|null $encryptionKeyArn
 * @property string|null $memoryExecutionRoleArn
 * @property int<1, 365> $eventExpiryDuration
 * @property 'CREATING'|'ACTIVE'|'FAILED'|'DELETING' $status
 * @property string|null $failureReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<MemoryStrategy>|null $strategies
 */
class Memory extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     name: string,
     *     description?: string|null,
     *     encryptionKeyArn?: string|null,
     *     memoryExecutionRoleArn?: string|null,
     *     eventExpiryDuration: int<1, 365>,
     *     status: 'CREATING'|'ACTIVE'|'FAILED'|'DELETING',
     *     failureReason?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     strategies?: list<MemoryStrategy>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
