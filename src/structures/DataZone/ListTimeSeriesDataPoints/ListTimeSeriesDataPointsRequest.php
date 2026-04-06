<?php

namespace Sunaoka\Aws\Structures\DataZone\ListTimeSeriesDataPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string $entityIdentifier
 * @property 'ASSET'|'LISTING' $entityType
 * @property string $formName
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property \Aws\Api\DateTimeResult|null $startedAt
 */
class ListTimeSeriesDataPointsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     entityIdentifier: string,
     *     entityType: 'ASSET'|'LISTING',
     *     formName: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
