<?php

namespace Sunaoka\Aws\Structures\Macie2\ListSensitivityInspectionTemplates;

trait ListSensitivityInspectionTemplatesTrait
{
    /**
     * @param ListSensitivityInspectionTemplatesRequest $args
     * @return ListSensitivityInspectionTemplatesResponse
     */
    public function listSensitivityInspectionTemplates(ListSensitivityInspectionTemplatesRequest $args)
    {
        $result = parent::listSensitivityInspectionTemplates($args->toArray());
        return new ListSensitivityInspectionTemplatesResponse($result->toArray());
    }
}
