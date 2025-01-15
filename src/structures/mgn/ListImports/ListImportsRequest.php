<?php

namespace Sunaoka\Aws\Structures\mgn\ListImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListImportsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListImportsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListImportsRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
