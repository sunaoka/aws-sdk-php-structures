<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListAnomalies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $anomalyDetectorArn
 * @property 'SUPPRESSED'|'UNSUPPRESSED'|null $suppressionState
 * @property int<1, 50>|null $limit
 * @property string|null $nextToken
 */
class ListAnomaliesRequest extends Request
{
    /**
     * @param array{
     *     anomalyDetectorArn?: string|null,
     *     suppressionState?: 'SUPPRESSED'|'UNSUPPRESSED'|null,
     *     limit?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
