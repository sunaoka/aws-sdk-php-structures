<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunCaches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $startingToken
 */
class ListRunCachesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     startingToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
