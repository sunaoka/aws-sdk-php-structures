<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationStoreVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property Shapes\ListAnnotationStoreVersionsFilter $filter
 */
class ListAnnotationStoreVersionsRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     filter?: Shapes\ListAnnotationStoreVersionsFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
