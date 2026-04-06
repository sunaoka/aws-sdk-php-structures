<?php

namespace Sunaoka\Aws\Structures\Glue\GetMaterializedViewRefreshTaskRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $MaterializedViewRefreshTaskRunId
 */
class GetMaterializedViewRefreshTaskRunRequest extends Request
{
    /**
     * @param array{
     *     CatalogId: string,
     *     MaterializedViewRefreshTaskRunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
