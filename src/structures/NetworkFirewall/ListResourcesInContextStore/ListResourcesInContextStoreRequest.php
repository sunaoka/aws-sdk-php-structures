<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListResourcesInContextStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextStoreId
 * @property Shapes\ContextFilters|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListResourcesInContextStoreRequest extends Request
{
    /**
     * @param array{
     *     ContextStoreId: string,
     *     Filters?: Shapes\ContextFilters|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
