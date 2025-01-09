<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationNamePrefix
 * @property string $nextToken
 * @property int $limit
 */
class DescribeDestinationsRequest extends Request
{
    /**
     * @param array{
     *     DestinationNamePrefix?: string,
     *     nextToken?: string,
     *     limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
