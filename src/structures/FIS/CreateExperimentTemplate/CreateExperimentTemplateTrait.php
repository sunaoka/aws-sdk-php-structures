<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate;

trait CreateExperimentTemplateTrait
{
    /**
     * @param CreateExperimentTemplateRequest $args
     * @return CreateExperimentTemplateResponse
     */
    public function createExperimentTemplate(CreateExperimentTemplateRequest $args)
    {
        $result = parent::createExperimentTemplate($args->toArray());
        return new CreateExperimentTemplateResponse($result->toArray());
    }
}
