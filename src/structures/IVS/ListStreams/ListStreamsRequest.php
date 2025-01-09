<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StreamFilters $filterBy
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     filterBy?: Shapes\StreamFilters,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
