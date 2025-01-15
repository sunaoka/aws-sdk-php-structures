<?php

namespace Sunaoka\Aws\Structures\Omics\ListSequenceStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\SequenceStoreFilter|null $filter
 */
class ListSequenceStoresRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filter?: Shapes\SequenceStoreFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
