<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationStores;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ids
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\ListAnnotationStoresFilter|null $filter
 */
class ListAnnotationStoresRequest extends Request
{
    /**
     * @param array{
     *     ids?: list<string>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filter?: Shapes\ListAnnotationStoresFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
