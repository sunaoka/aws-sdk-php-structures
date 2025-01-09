<?php

namespace Sunaoka\Aws\Structures\Iot\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250> $maxResults
 * @property string $nextToken
 * @property bool $ascendingOrder
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 250>,
     *     nextToken?: string,
     *     ascendingOrder?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
