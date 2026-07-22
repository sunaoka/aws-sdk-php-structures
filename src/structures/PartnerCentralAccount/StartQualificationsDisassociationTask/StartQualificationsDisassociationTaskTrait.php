<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartQualificationsDisassociationTask;

trait StartQualificationsDisassociationTaskTrait
{
    /**
     * @param StartQualificationsDisassociationTaskRequest $args
     * @return StartQualificationsDisassociationTaskResponse
     */
    public function startQualificationsDisassociationTask(StartQualificationsDisassociationTaskRequest $args)
    {
        $result = parent::startQualificationsDisassociationTask($args->toArray());
        return new StartQualificationsDisassociationTaskResponse($result->toArray());
    }
}
