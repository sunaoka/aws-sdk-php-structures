<?php

namespace Sunaoka\Aws\Structures\Backup\GetBackupPlanFromTemplate;

trait GetBackupPlanFromTemplateTrait
{
    /**
     * @param GetBackupPlanFromTemplateRequest $args
     * @return GetBackupPlanFromTemplateResponse
     */
    public function getBackupPlanFromTemplate(GetBackupPlanFromTemplateRequest $args)
    {
        $result = parent::getBackupPlanFromTemplate($args->toArray());
        return new GetBackupPlanFromTemplateResponse($result->toArray());
    }
}
