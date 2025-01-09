<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property list<Shapes\Filter> $filters
 */
class ListFleetsRequest extends Request
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
