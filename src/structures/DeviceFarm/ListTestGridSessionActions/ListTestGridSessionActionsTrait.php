<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessionActions;

trait ListTestGridSessionActionsTrait
{
    /**
     * @param ListTestGridSessionActionsRequest $args
     * @return ListTestGridSessionActionsResponse
     */
    public function listTestGridSessionActions(ListTestGridSessionActionsRequest $args)
    {
        $result = parent::listTestGridSessionActions($args->toArray());
        return new ListTestGridSessionActionsResponse($result->toArray());
    }
}
