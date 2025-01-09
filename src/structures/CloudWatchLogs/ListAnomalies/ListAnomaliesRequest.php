<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListAnomalies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $anomalyDetectorArn
 * @property 'SUPPRESSED'|'UNSUPPRESSED' $suppressionState
 * @property int<1, 50> $limit
 * @property string $nextToken
 */
class ListAnomaliesRequest extends Request
{
    /**
     * @param array{
     *     anomalyDetectorArn?: string,
     *     suppressionState?: 'SUPPRESSED'|'UNSUPPRESSED',
     *     limit?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
