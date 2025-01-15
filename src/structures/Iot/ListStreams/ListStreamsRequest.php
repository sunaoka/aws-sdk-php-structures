<?php

namespace Sunaoka\Aws\Structures\Iot\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 * @property bool|null $ascendingOrder
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null,
     *     ascendingOrder?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
