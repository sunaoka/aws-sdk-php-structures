<?php

namespace Sunaoka\Aws\Structures\mgn\RemoveTemplateAction;

trait RemoveTemplateActionTrait
{
    /**
     * @param RemoveTemplateActionRequest $args
     * @return RemoveTemplateActionResponse
     */
    public function removeTemplateAction(RemoveTemplateActionRequest $args)
    {
        $result = parent::removeTemplateAction($args->toArray());
        return new RemoveTemplateActionResponse($result->toArray());
    }
}
