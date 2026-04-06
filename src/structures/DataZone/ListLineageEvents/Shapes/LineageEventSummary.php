<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $domainId
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null $processingStatus
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property EventSummary|null $eventSummary
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class LineageEventSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     domainId?: string|null,
     *     processingStatus?: 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null,
     *     eventTime?: \Aws\Api\DateTimeResult|null,
     *     eventSummary?: EventSummary|null,
     *     createdBy?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
