<?php

namespace Sunaoka\Aws\Structures\Glue\StartMaterializedViewRefreshTaskRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property bool|null $FullRefresh
 */
class StartMaterializedViewRefreshTaskRunRequest extends Request
{
    /**
     * @param array{
     *     CatalogId: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     FullRefresh?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
