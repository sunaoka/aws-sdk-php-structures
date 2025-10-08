<?php

namespace Sunaoka\Aws\Structures\Backup\ExportBackupPlanTemplate;

trait ExportBackupPlanTemplateTrait
{
    /**
     * @param ExportBackupPlanTemplateRequest $args
     * @return ExportBackupPlanTemplateResponse
     */
    public function exportBackupPlanTemplate(ExportBackupPlanTemplateRequest $args)
    {
        $result = parent::exportBackupPlanTemplate($args->toArray());
        return new ExportBackupPlanTemplateResponse($result->toArray());
    }
}
