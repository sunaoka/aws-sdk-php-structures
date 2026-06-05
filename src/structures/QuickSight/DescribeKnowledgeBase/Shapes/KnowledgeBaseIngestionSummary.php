<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IngestionId
 * @property 'QUEUED'|'RUNNING'|'FAILED'|'COMPLETED'|'INCOMPLETE'|'CANCELLED'|'CANCELLING'|'TIMEOUT' $IngestionStatus
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class KnowledgeBaseIngestionSummary extends Shape
{
    /**
     * @param array{
     *     IngestionId: string,
     *     IngestionStatus: 'QUEUED'|'RUNNING'|'FAILED'|'COMPLETED'|'INCOMPLETE'|'CANCELLED'|'CANCELLING'|'TIMEOUT',
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
