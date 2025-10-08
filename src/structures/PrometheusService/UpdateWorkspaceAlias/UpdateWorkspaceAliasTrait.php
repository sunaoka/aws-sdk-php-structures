<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateWorkspaceAlias;

trait UpdateWorkspaceAliasTrait
{
    /**
     * @param UpdateWorkspaceAliasRequest $args
     * @return void
     */
    public function updateWorkspaceAlias(UpdateWorkspaceAliasRequest $args)
    {
        parent::updateWorkspaceAlias($args->toArray());
    }
}
