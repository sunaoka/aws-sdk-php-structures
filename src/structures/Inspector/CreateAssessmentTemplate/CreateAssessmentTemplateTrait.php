<?php

namespace Sunaoka\Aws\Structures\Inspector\CreateAssessmentTemplate;

trait CreateAssessmentTemplateTrait
{
    /**
     * @param CreateAssessmentTemplateRequest $args
     * @return CreateAssessmentTemplateResponse
     */
    public function createAssessmentTemplate(CreateAssessmentTemplateRequest $args)
    {
        $result = parent::createAssessmentTemplate($args->toArray());
        return new CreateAssessmentTemplateResponse($result->toArray());
    }
}
