<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListManagedViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 * @property string $ServicePrincipal
 */
class ListManagedViewsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string,
     *     ServicePrincipal?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
