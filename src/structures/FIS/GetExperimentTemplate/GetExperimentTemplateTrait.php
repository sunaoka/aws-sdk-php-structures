<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperimentTemplate;

trait GetExperimentTemplateTrait
{
    /**
     * @param GetExperimentTemplateRequest $args
     * @return GetExperimentTemplateResponse
     */
    public function getExperimentTemplate(GetExperimentTemplateRequest $args)
    {
        $result = parent::getExperimentTemplate($args->toArray());
        return new GetExperimentTemplateResponse($result->toArray());
    }
}
