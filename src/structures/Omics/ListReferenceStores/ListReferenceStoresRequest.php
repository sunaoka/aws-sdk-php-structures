<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferenceStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\ReferenceStoreFilter $filter
 */
class ListReferenceStoresRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     filter?: Shapes\ReferenceStoreFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
