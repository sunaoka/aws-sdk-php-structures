<?php

namespace Sunaoka\Aws\Structures\Emr\ListBootstrapActions;

trait ListBootstrapActionsTrait
{
    /**
     * @param ListBootstrapActionsRequest $args
     * @return ListBootstrapActionsResponse
     */
    public function listBootstrapActions(ListBootstrapActionsRequest $args)
    {
        $result = parent::listBootstrapActions($args->toArray());
        return new ListBootstrapActionsResponse($result->toArray());
    }
}
