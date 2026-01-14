<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageNodeHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property string $identifier
 * @property 'UPSTREAM'|'DOWNSTREAM'|null $direction
 * @property \Aws\Api\DateTimeResult|null $eventTimestampGTE
 * @property \Aws\Api\DateTimeResult|null $eventTimestampLTE
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 */
class ListLineageNodeHistoryRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     identifier: string,
     *     direction?: 'UPSTREAM'|'DOWNSTREAM'|null,
     *     eventTimestampGTE?: \Aws\Api\DateTimeResult|null,
     *     eventTimestampLTE?: \Aws\Api\DateTimeResult|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
