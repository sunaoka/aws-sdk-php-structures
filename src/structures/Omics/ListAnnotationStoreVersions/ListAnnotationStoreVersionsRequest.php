<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationStoreVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\ListAnnotationStoreVersionsFilter|null $filter
 */
class ListAnnotationStoreVersionsRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filter?: Shapes\ListAnnotationStoreVersionsFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
