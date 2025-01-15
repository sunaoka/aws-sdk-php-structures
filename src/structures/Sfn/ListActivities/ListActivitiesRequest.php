<?php

namespace Sunaoka\Aws\Structures\Sfn\ListActivities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListActivitiesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<0, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
