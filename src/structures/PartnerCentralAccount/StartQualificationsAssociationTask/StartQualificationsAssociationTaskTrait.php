<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartQualificationsAssociationTask;

trait StartQualificationsAssociationTaskTrait
{
    /**
     * @param StartQualificationsAssociationTaskRequest $args
     * @return StartQualificationsAssociationTaskResponse
     */
    public function startQualificationsAssociationTask(StartQualificationsAssociationTaskRequest $args)
    {
        $result = parent::startQualificationsAssociationTask($args->toArray());
        return new StartQualificationsAssociationTaskResponse($result->toArray());
    }
}
