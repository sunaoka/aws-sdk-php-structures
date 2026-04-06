<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StreamFilters|null $filterBy
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     filterBy?: Shapes\StreamFilters|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
