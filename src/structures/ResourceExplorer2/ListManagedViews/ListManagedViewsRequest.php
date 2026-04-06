<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListManagedViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $ServicePrincipal
 */
class ListManagedViewsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     ServicePrincipal?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
