<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitivityInspectionTemplate;

trait GetSensitivityInspectionTemplateTrait
{
    /**
     * @param GetSensitivityInspectionTemplateRequest $args
     * @return GetSensitivityInspectionTemplateResponse
     */
    public function getSensitivityInspectionTemplate(GetSensitivityInspectionTemplateRequest $args)
    {
        $result = parent::getSensitivityInspectionTemplate($args->toArray());
        return new GetSensitivityInspectionTemplateResponse($result->toArray());
    }
}
