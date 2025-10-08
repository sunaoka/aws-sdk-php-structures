<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlanFromJSON;

trait GetBackupPlanFromJSONTrait
{
    /**
     * @param GetBackupPlanFromJSONRequest $args
     * @return GetBackupPlanFromJSONResponse
     */
    public function getBackupPlanFromJSON(GetBackupPlanFromJSONRequest $args)
    {
        $result = parent::getBackupPlanFromJSON($args->toArray());
        return new GetBackupPlanFromJSONResponse($result->toArray());
    }
}
