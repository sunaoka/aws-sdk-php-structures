<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $referenceStoreId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\ReferenceFilter|null $filter
 */
class ListReferencesRequest extends Request
{
    /**
     * @param array{
     *     referenceStoreId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filter?: Shapes\ReferenceFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
