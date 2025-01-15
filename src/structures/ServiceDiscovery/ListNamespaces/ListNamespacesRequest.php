<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListNamespaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<Shapes\NamespaceFilter>|null $Filters
 */
class ListNamespacesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Filters?: list<Shapes\NamespaceFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
