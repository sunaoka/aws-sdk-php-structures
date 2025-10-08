<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationAnalysisTemplate;

trait GetCollaborationAnalysisTemplateTrait
{
    /**
     * @param GetCollaborationAnalysisTemplateRequest $args
     * @return GetCollaborationAnalysisTemplateResponse
     */
    public function getCollaborationAnalysisTemplate(GetCollaborationAnalysisTemplateRequest $args)
    {
        $result = parent::getCollaborationAnalysisTemplate($args->toArray());
        return new GetCollaborationAnalysisTemplateResponse($result->toArray());
    }
}
