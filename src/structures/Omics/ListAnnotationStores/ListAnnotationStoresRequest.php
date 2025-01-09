<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ids
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property Shapes\ListAnnotationStoresFilter $filter
 */
class ListAnnotationStoresRequest extends Request
{
    /**
     * @param array{
     *     ids?: list<string>,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     filter?: Shapes\ListAnnotationStoresFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
