<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListRobots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property list<Shapes\Filter> $filters
 */
class ListRobotsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
