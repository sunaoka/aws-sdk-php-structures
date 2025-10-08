<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeleteControl;

trait DeleteControlTrait
{
    /**
     * @param DeleteControlRequest $args
     * @return DeleteControlResponse
     */
    public function deleteControl(DeleteControlRequest $args)
    {
        $result = parent::deleteControl($args->toArray());
        return new DeleteControlResponse($result->toArray());
    }
}
