<?php

namespace Sunaoka\Aws\Structures\mgn\ListConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListConnectorsRequestFilters $filters
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListConnectorsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListConnectorsRequestFilters,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
