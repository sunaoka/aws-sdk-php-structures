<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseLogEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property string $logStreamName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property bool $startFromHead
 * @property string $pageToken
 */
class GetRelationalDatabaseLogEventsRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     logStreamName: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     startFromHead?: bool,
     *     pageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
