<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListTelemetryFields;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSetName
 * @property 'LOGS'|'TRACES'|null $telemetryType
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $nextToken
 */
class ListTelemetryFieldsRequest extends Request
{
    /**
     * @param array{
     *     dataSetName: string,
     *     telemetryType?: 'LOGS'|'TRACES'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
