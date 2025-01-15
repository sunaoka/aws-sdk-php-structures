<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SearchFilter|null $Filters
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $ViewArn
 */
class ListResourcesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\SearchFilter|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     ViewArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
