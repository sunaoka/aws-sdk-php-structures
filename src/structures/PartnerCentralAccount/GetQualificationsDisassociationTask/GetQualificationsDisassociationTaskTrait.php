<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetQualificationsDisassociationTask;

trait GetQualificationsDisassociationTaskTrait
{
    /**
     * @param GetQualificationsDisassociationTaskRequest $args
     * @return GetQualificationsDisassociationTaskResponse
     */
    public function getQualificationsDisassociationTask(GetQualificationsDisassociationTaskRequest $args)
    {
        $result = parent::getQualificationsDisassociationTask($args->toArray());
        return new GetQualificationsDisassociationTaskResponse($result->toArray());
    }
}
