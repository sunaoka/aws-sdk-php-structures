<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetCollaborationAnalysisTemplate;

trait BatchGetCollaborationAnalysisTemplateTrait
{
    /**
     * @param BatchGetCollaborationAnalysisTemplateRequest $args
     * @return BatchGetCollaborationAnalysisTemplateResponse
     */
    public function batchGetCollaborationAnalysisTemplate(BatchGetCollaborationAnalysisTemplateRequest $args)
    {
        $result = parent::batchGetCollaborationAnalysisTemplate($args->toArray());
        return new BatchGetCollaborationAnalysisTemplateResponse($result->toArray());
    }
}
