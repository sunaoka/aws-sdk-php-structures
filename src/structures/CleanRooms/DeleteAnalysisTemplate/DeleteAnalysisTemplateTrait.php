<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteAnalysisTemplate;

trait DeleteAnalysisTemplateTrait
{
    /**
     * @param DeleteAnalysisTemplateRequest $args
     * @return DeleteAnalysisTemplateResponse
     */
    public function deleteAnalysisTemplate(DeleteAnalysisTemplateRequest $args)
    {
        $result = parent::deleteAnalysisTemplate($args->toArray());
        return new DeleteAnalysisTemplateResponse($result->toArray());
    }
}
