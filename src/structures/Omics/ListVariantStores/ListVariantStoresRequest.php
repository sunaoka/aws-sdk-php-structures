<?php

namespace Sunaoka\Aws\Structures\Omics\ListVariantStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property list<string> $ids
 * @property string $nextToken
 * @property Shapes\ListVariantStoresFilter $filter
 */
class ListVariantStoresRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     ids?: list<string>,
     *     nextToken?: string,
     *     filter?: Shapes\ListVariantStoresFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
