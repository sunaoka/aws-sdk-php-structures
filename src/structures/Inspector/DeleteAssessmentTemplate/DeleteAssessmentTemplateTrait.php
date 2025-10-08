<?php

namespace Sunaoka\Aws\Structures\Inspector\DeleteAssessmentTemplate;

trait DeleteAssessmentTemplateTrait
{
    /**
     * @param DeleteAssessmentTemplateRequest $args
     * @return void
     */
    public function deleteAssessmentTemplate(DeleteAssessmentTemplateRequest $args)
    {
        parent::deleteAssessmentTemplate($args->toArray());
    }
}
