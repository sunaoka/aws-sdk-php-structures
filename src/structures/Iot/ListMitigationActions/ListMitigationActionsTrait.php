<?php

namespace Sunaoka\Aws\Structures\Iot\ListMitigationActions;

trait ListMitigationActionsTrait
{
    /**
     * @param ListMitigationActionsRequest $args
     * @return ListMitigationActionsResponse
     */
    public function listMitigationActions(ListMitigationActionsRequest $args)
    {
        $result = parent::listMitigationActions($args->toArray());
        return new ListMitigationActionsResponse($result->toArray());
    }
}
