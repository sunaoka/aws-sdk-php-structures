<?php

namespace Sunaoka\Aws\Structures\DataZone\ListTimeSeriesDataPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'ASSET'|'LISTING' $entityType
 * @property string $formName
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListTimeSeriesDataPointsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'ASSET'|'LISTING',
     *     formName: string,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
