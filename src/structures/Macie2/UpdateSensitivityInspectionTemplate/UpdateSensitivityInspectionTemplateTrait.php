<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateSensitivityInspectionTemplate;

trait UpdateSensitivityInspectionTemplateTrait
{
    /**
     * @param UpdateSensitivityInspectionTemplateRequest $args
     * @return UpdateSensitivityInspectionTemplateResponse
     */
    public function updateSensitivityInspectionTemplate(UpdateSensitivityInspectionTemplateRequest $args)
    {
        $result = parent::updateSensitivityInspectionTemplate($args->toArray());
        return new UpdateSensitivityInspectionTemplateResponse($result->toArray());
    }
}
