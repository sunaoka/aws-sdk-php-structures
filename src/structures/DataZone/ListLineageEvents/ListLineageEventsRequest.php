<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property \Aws\Api\DateTimeResult|null $timestampAfter
 * @property \Aws\Api\DateTimeResult|null $timestampBefore
 * @property 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null $processingStatus
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 */
class ListLineageEventsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     timestampAfter?: \Aws\Api\DateTimeResult|null,
     *     timestampBefore?: \Aws\Api\DateTimeResult|null,
     *     processingStatus?: 'REQUESTED'|'PROCESSING'|'SUCCESS'|'FAILED'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
