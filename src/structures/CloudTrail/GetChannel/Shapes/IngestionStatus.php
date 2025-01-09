<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LatestIngestionSuccessTime
 * @property string $LatestIngestionSuccessEventID
 * @property string $LatestIngestionErrorCode
 * @property \Aws\Api\DateTimeResult $LatestIngestionAttemptTime
 * @property string $LatestIngestionAttemptEventID
 */
class IngestionStatus extends Shape
{
    /**
     * @param array{
     *     LatestIngestionSuccessTime?: \Aws\Api\DateTimeResult,
     *     LatestIngestionSuccessEventID?: string,
     *     LatestIngestionErrorCode?: string,
     *     LatestIngestionAttemptTime?: \Aws\Api\DateTimeResult,
     *     LatestIngestionAttemptEventID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
