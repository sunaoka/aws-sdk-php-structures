<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListManagedViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ServicePrincipal
 */
class ListManagedViewsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ServicePrincipal?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
