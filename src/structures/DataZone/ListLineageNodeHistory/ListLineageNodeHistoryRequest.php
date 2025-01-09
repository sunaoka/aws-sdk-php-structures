<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageNodeHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'UPSTREAM'|'DOWNSTREAM' $direction
 * @property string $domainIdentifier
 * @property \Aws\Api\DateTimeResult $eventTimestampGTE
 * @property \Aws\Api\DateTimeResult $eventTimestampLTE
 * @property string $identifier
 * @property int $maxResults
 * @property string $nextToken
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 */
class ListLineageNodeHistoryRequest extends Request
{
    /**
     * @param array{
     *     direction?: 'UPSTREAM'|'DOWNSTREAM',
     *     domainIdentifier: string,
     *     eventTimestampGTE?: \Aws\Api\DateTimeResult,
     *     eventTimestampLTE?: \Aws\Api\DateTimeResult,
     *     identifier: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
