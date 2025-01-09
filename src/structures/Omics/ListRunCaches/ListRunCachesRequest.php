<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunCaches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $startingToken
 */
class ListRunCachesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     startingToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
