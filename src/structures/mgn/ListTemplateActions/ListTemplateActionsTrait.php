<?php

namespace Sunaoka\Aws\Structures\mgn\ListTemplateActions;

trait ListTemplateActionsTrait
{
    /**
     * @param ListTemplateActionsRequest $args
     * @return ListTemplateActionsResponse
     */
    public function listTemplateActions(ListTemplateActionsRequest $args)
    {
        $result = parent::listTemplateActions($args->toArray());
        return new ListTemplateActionsResponse($result->toArray());
    }
}
