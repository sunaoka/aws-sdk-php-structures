<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $referenceStoreId
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\ReferenceFilter $filter
 */
class ListReferencesRequest extends Request
{
    /**
     * @param array{
     *     referenceStoreId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     filter?: Shapes\ReferenceFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
