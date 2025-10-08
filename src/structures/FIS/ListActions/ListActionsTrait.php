<?php

namespace Sunaoka\Aws\Structures\FIS\ListActions;

trait ListActionsTrait
{
    /**
     * @param ListActionsRequest $args
     * @return ListActionsResponse
     */
    public function listActions(ListActionsRequest $args)
    {
        $result = parent::listActions($args->toArray());
        return new ListActionsResponse($result->toArray());
    }
}
