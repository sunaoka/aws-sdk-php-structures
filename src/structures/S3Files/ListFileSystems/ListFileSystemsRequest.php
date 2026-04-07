<?php

namespace Sunaoka\Aws\Structures\S3Files\ListFileSystems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $bucket
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListFileSystemsRequest extends Request
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
