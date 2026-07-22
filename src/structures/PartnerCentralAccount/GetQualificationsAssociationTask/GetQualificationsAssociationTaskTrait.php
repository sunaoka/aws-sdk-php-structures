<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetQualificationsAssociationTask;

trait GetQualificationsAssociationTaskTrait
{
    /**
     * @param GetQualificationsAssociationTaskRequest $args
     * @return GetQualificationsAssociationTaskResponse
     */
    public function getQualificationsAssociationTask(GetQualificationsAssociationTaskRequest $args)
    {
        $result = parent::getQualificationsAssociationTask($args->toArray());
        return new GetQualificationsAssociationTaskResponse($result->toArray());
    }
}
