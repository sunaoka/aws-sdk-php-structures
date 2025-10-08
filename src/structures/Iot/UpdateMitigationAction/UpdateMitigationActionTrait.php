<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateMitigationAction;

trait UpdateMitigationActionTrait
{
    /**
     * @param UpdateMitigationActionRequest $args
     * @return UpdateMitigationActionResponse
     */
    public function updateMitigationAction(UpdateMitigationActionRequest $args)
    {
        $result = parent::updateMitigationAction($args->toArray());
        return new UpdateMitigationActionResponse($result->toArray());
    }
}
