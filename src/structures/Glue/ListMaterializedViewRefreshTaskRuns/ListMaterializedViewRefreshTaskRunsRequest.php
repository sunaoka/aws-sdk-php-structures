<?php

namespace Sunaoka\Aws\Structures\Glue\ListMaterializedViewRefreshTaskRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListMaterializedViewRefreshTaskRunsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId: string,
     *     DatabaseName?: string|null,
     *     TableName?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
