<?php

namespace Sunaoka\Aws\Structures\mgn\ListConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListConnectorsRequestFilters $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListConnectorsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListConnectorsRequestFilters,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
