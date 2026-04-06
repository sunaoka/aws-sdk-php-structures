<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListLogAnomalyDetectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $filterLogGroupArn
 * @property int<1, 50>|null $limit
 * @property string|null $nextToken
 */
class ListLogAnomalyDetectorsRequest extends Request
{
    /**
     * @param array{
     *     filterLogGroupArn?: string|null,
     *     limit?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
