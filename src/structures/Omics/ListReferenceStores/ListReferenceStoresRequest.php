<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferenceStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\ReferenceStoreFilter|null $filter
 */
class ListReferenceStoresRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filter?: Shapes\ReferenceStoreFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
