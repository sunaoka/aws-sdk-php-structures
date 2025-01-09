<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListNamespaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<Shapes\NamespaceFilter> $Filters
 */
class ListNamespacesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filters?: list<Shapes\NamespaceFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
