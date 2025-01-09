<?php

namespace Sunaoka\Aws\Structures\Omics\ListVariantStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property list<string> $ids
 * @property string $nextToken
 * @property Shapes\ListVariantStoresFilter $filter
 */
class ListVariantStoresRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
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
