<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentAction;

trait UpdateEnvironmentActionTrait
{
    /**
     * @param UpdateEnvironmentActionRequest $args
     * @return UpdateEnvironmentActionResponse
     */
    public function updateEnvironmentAction(UpdateEnvironmentActionRequest $args)
    {
        $result = parent::updateEnvironmentAction($args->toArray());
        return new UpdateEnvironmentActionResponse($result->toArray());
    }
}
