<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StreamFilters|null $filterBy
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     filterBy?: Shapes\StreamFilters|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
