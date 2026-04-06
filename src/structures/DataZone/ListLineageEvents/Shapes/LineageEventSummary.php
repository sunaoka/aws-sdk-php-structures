<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $domainId
 * @property EventSummary|null $eventSummary
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property string|null $id
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null $processingStatus
 */
class LineageEventSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     domainId?: string|null,
     *     eventSummary?: EventSummary|null,
     *     eventTime?: \Aws\Api\DateTimeResult|null,
     *     id?: string|null,
     *     processingStatus?: 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
