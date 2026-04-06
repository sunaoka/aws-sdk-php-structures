<?php

namespace Sunaoka\Aws\Structures\mgn\ListConnectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListConnectorsRequestFilters|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListConnectorsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\ListConnectorsRequestFilters|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
