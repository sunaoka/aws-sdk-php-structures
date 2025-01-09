<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationStoreVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\ListAnnotationStoreVersionsFilter $filter
 */
class ListAnnotationStoreVersionsRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     filter?: Shapes\ListAnnotationStoreVersionsFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
