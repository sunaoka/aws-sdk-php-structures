<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $Group
 * @property list<Shapes\ResourceFilter> $Filters
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListGroupResourcesRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string,
     *     Group?: string,
     *     Filters?: list<Shapes\ResourceFilter>,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
