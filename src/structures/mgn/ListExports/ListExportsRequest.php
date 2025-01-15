<?php

namespace Sunaoka\Aws\Structures\mgn\ListExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListExportsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListExportsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListExportsRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
