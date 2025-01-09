<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListSegments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 */
class ListSegmentsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
