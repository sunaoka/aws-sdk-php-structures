<?php

namespace Sunaoka\Aws\Structures\mgn\ListExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListExportsRequestFilters $filters
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListExportsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListExportsRequestFilters,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
