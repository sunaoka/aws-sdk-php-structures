<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property EventSummary $eventSummary
 * @property \Aws\Api\DateTimeResult $eventTime
 * @property string $id
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED' $processingStatus
 */
class LineageEventSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     domainId?: string,
     *     eventSummary?: EventSummary,
     *     eventTime?: \Aws\Api\DateTimeResult,
     *     id?: string,
     *     processingStatus?: 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
