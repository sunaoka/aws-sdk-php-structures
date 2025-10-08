<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupPlanTemplates;

trait ListBackupPlanTemplatesTrait
{
    /**
     * @param ListBackupPlanTemplatesRequest $args
     * @return ListBackupPlanTemplatesResponse
     */
    public function listBackupPlanTemplates(ListBackupPlanTemplatesRequest $args)
    {
        $result = parent::listBackupPlanTemplates($args->toArray());
        return new ListBackupPlanTemplatesResponse($result->toArray());
    }
}
