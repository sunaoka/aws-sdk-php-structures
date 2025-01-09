<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StreamFilters $filterBy
 * @property int $maxResults
 * @property string $nextToken
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     filterBy?: Shapes\StreamFilters,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
