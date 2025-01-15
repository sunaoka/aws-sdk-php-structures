<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageNodeHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'UPSTREAM'|'DOWNSTREAM'|null $direction
 * @property string $domainIdentifier
 * @property \Aws\Api\DateTimeResult|null $eventTimestampGTE
 * @property \Aws\Api\DateTimeResult|null $eventTimestampLTE
 * @property string $identifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 */
class ListLineageNodeHistoryRequest extends Request
{
    /**
     * @param array{
     *     direction?: 'UPSTREAM'|'DOWNSTREAM'|null,
     *     domainIdentifier: string,
     *     eventTimestampGTE?: \Aws\Api\DateTimeResult|null,
     *     eventTimestampLTE?: \Aws\Api\DateTimeResult|null,
     *     identifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
