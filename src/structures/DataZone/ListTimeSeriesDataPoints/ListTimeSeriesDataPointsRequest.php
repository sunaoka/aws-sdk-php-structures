<?php

namespace Sunaoka\Aws\Structures\DataZone\ListTimeSeriesDataPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property string $entityIdentifier
 * @property 'ASSET'|'LISTING' $entityType
 * @property string $formName
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 * @property \Aws\Api\DateTimeResult $startedAt
 */
class ListTimeSeriesDataPointsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     endedAt?: \Aws\Api\DateTimeResult,
     *     entityIdentifier: string,
     *     entityType: 'ASSET'|'LISTING',
     *     formName: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string,
     *     startedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
