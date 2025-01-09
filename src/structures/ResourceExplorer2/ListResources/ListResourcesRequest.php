<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SearchFilter $Filters
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property string $ViewArn
 */
class ListResourcesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\SearchFilter,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     ViewArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
