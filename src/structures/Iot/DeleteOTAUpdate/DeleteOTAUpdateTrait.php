<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteOTAUpdate;

trait DeleteOTAUpdateTrait
{
    /**
     * @param DeleteOTAUpdateRequest $args
     * @return DeleteOTAUpdateResponse
     */
    public function deleteOTAUpdate(DeleteOTAUpdateRequest $args)
    {
        $result = parent::deleteOTAUpdate($args->toArray());
        return new DeleteOTAUpdateResponse($result->toArray());
    }
}
