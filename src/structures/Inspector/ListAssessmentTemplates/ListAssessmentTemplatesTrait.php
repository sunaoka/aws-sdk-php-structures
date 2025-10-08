<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentTemplates;

trait ListAssessmentTemplatesTrait
{
    /**
     * @param ListAssessmentTemplatesRequest $args
     * @return ListAssessmentTemplatesResponse
     */
    public function listAssessmentTemplates(ListAssessmentTemplatesRequest $args)
    {
        $result = parent::listAssessmentTemplates($args->toArray());
        return new ListAssessmentTemplatesResponse($result->toArray());
    }
}
