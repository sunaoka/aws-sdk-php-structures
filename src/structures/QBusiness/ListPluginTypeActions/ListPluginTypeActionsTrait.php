<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListPluginTypeActions;

trait ListPluginTypeActionsTrait
{
    /**
     * @param ListPluginTypeActionsRequest $args
     * @return ListPluginTypeActionsResponse
     */
    public function listPluginTypeActions(ListPluginTypeActionsRequest $args)
    {
        $result = parent::listPluginTypeActions($args->toArray());
        return new ListPluginTypeActionsResponse($result->toArray());
    }
}
