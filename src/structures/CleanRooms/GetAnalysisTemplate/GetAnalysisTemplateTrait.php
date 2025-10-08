<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetAnalysisTemplate;

trait GetAnalysisTemplateTrait
{
    /**
     * @param GetAnalysisTemplateRequest $args
     * @return GetAnalysisTemplateResponse
     */
    public function getAnalysisTemplate(GetAnalysisTemplateRequest $args)
    {
        $result = parent::getAnalysisTemplate($args->toArray());
        return new GetAnalysisTemplateResponse($result->toArray());
    }
}
