<?php

namespace Sunaoka\Aws\Structures\Odb\ListSystemVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string $giVersion
 * @property string $shape
 */
class ListSystemVersionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     giVersion: string,
     *     shape: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
