<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateAssociationStatus;

trait UpdateAssociationStatusTrait
{
    /**
     * @param UpdateAssociationStatusRequest $args
     * @return UpdateAssociationStatusResponse
     */
    public function updateAssociationStatus(UpdateAssociationStatusRequest $args)
    {
        $result = parent::updateAssociationStatus($args->toArray());
        return new UpdateAssociationStatusResponse($result->toArray());
    }
}
