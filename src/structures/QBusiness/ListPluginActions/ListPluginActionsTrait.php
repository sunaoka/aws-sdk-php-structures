<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListPluginActions;

trait ListPluginActionsTrait
{
    /**
     * @param ListPluginActionsRequest $args
     * @return ListPluginActionsResponse
     */
    public function listPluginActions(ListPluginActionsRequest $args)
    {
        $result = parent::listPluginActions($args->toArray());
        return new ListPluginActionsResponse($result->toArray());
    }
}
