<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListVirtualInterfaceRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $virtualInterfaceId
 * @property Shapes\RouteFilters|null $filters
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListVirtualInterfaceRoutesRequest extends Request
{
    /**
     * @param array{
     *     virtualInterfaceId?: string|null,
     *     filters?: Shapes\RouteFilters|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
