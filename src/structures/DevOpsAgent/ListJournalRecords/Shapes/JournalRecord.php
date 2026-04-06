<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListJournalRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentSpaceId
 * @property string $executionId
 * @property string $recordId
 * @property Document $content
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $recordType
 * @property UserReference|null $userReference
 */
class JournalRecord extends Shape
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     executionId: string,
     *     recordId: string,
     *     content: Document,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     recordType: string,
     *     userReference?: UserReference|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
