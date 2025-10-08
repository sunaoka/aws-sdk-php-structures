<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate;

trait UpdateExperimentTemplateTrait
{
    /**
     * @param UpdateExperimentTemplateRequest $args
     * @return UpdateExperimentTemplateResponse
     */
    public function updateExperimentTemplate(UpdateExperimentTemplateRequest $args)
    {
        $result = parent::updateExperimentTemplate($args->toArray());
        return new UpdateExperimentTemplateResponse($result->toArray());
    }
}
