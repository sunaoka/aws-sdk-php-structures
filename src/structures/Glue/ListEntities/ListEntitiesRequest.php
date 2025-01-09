<?php

namespace Sunaoka\Aws\Structures\Glue\ListEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionName
 * @property string $CatalogId
 * @property string $ParentEntityName
 * @property string $NextToken
 * @property string $DataStoreApiVersion
 */
class ListEntitiesRequest extends Request
{
    /**
     * @param array{
     *     ConnectionName?: string,
     *     CatalogId?: string,
     *     ParentEntityName?: string,
     *     NextToken?: string,
     *     DataStoreApiVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
