<?php

namespace Sunaoka\Aws\Structures\S3Files\ListAccessPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fileSystemId
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListAccessPointsRequest extends Request
{
    /**
     * @param array{
     *     fileSystemId: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
