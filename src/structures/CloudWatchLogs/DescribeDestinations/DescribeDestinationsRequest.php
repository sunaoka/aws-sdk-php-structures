<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DestinationNamePrefix
 * @property string|null $nextToken
 * @property int<1, 50>|null $limit
 */
class DescribeDestinationsRequest extends Request
{
    /**
     * @param array{
     *     DestinationNamePrefix?: string|null,
     *     nextToken?: string|null,
     *     limit?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
