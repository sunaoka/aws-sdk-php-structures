<?php

namespace Sunaoka\Aws\Structures\Omics\ListSequenceStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\SequenceStoreFilter $filter
 */
class ListSequenceStoresRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     filter?: Shapes\SequenceStoreFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
