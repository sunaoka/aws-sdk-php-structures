<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteMitigationAction;

trait DeleteMitigationActionTrait
{
    /**
     * @param DeleteMitigationActionRequest $args
     * @return DeleteMitigationActionResponse
     */
    public function deleteMitigationAction(DeleteMitigationActionRequest $args)
    {
        $result = parent::deleteMitigationAction($args->toArray());
        return new DeleteMitigationActionResponse($result->toArray());
    }
}
