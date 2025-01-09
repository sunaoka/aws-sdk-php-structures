<?php

namespace Sunaoka\Aws\Structures\mgn\ListExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListExportsRequestFilters $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListExportsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListExportsRequestFilters,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
