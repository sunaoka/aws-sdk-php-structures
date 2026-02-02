<?php

namespace Sunaoka\Aws\Structures\Glue\StopMaterializedViewRefreshTaskRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 */
class StopMaterializedViewRefreshTaskRunRequest extends Request
{
    /**
     * @param array{
     *     CatalogId: string,
     *     DatabaseName: string,
     *     TableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
