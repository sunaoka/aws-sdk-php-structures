<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseLogEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property string $logStreamName
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property bool|null $startFromHead
 * @property string|null $pageToken
 */
class GetRelationalDatabaseLogEventsRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     logStreamName: string,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     startFromHead?: bool|null,
     *     pageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
