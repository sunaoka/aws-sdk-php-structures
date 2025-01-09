<?php

namespace Sunaoka\Aws\Structures\mgn\ListImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListImportsRequestFilters $filters
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListImportsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListImportsRequestFilters,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
