<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListLogAnomalyDetectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $filterLogGroupArn
 * @property int<1, 50> $limit
 * @property string $nextToken
 */
class ListLogAnomalyDetectorsRequest extends Request
{
    /**
     * @param array{
     *     filterLogGroupArn?: string,
     *     limit?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
