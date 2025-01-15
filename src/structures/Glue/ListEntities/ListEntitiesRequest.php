<?php

namespace Sunaoka\Aws\Structures\Glue\ListEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ConnectionName
 * @property string|null $CatalogId
 * @property string|null $ParentEntityName
 * @property string|null $NextToken
 * @property string|null $DataStoreApiVersion
 */
class ListEntitiesRequest extends Request
{
    /**
     * @param array{
     *     ConnectionName?: string|null,
     *     CatalogId?: string|null,
     *     ParentEntityName?: string|null,
     *     NextToken?: string|null,
     *     DataStoreApiVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
