<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $LatestIngestionSuccessTime
 * @property string|null $LatestIngestionSuccessEventID
 * @property string|null $LatestIngestionErrorCode
 * @property \Aws\Api\DateTimeResult|null $LatestIngestionAttemptTime
 * @property string|null $LatestIngestionAttemptEventID
 */
class IngestionStatus extends Shape
{
    /**
     * @param array{
     *     LatestIngestionSuccessTime?: \Aws\Api\DateTimeResult|null,
     *     LatestIngestionSuccessEventID?: string|null,
     *     LatestIngestionErrorCode?: string|null,
     *     LatestIngestionAttemptTime?: \Aws\Api\DateTimeResult|null,
     *     LatestIngestionAttemptEventID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
