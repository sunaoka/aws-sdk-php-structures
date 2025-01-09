<?php

namespace Sunaoka\Aws\Structures\Omics\ListSequenceStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property Shapes\SequenceStoreFilter $filter
 */
class ListSequenceStoresRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     filter?: Shapes\SequenceStoreFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
