<?php

namespace Sunaoka\Aws\Structures\FIS\DeleteExperimentTemplate;

trait DeleteExperimentTemplateTrait
{
    /**
     * @param DeleteExperimentTemplateRequest $args
     * @return DeleteExperimentTemplateResponse
     */
    public function deleteExperimentTemplate(DeleteExperimentTemplateRequest $args)
    {
        $result = parent::deleteExperimentTemplate($args->toArray());
        return new DeleteExperimentTemplateResponse($result->toArray());
    }
}
