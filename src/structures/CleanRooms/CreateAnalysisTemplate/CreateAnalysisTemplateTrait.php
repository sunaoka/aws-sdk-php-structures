<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateAnalysisTemplate;

trait CreateAnalysisTemplateTrait
{
    /**
     * @param CreateAnalysisTemplateRequest $args
     * @return CreateAnalysisTemplateResponse
     */
    public function createAnalysisTemplate(CreateAnalysisTemplateRequest $args)
    {
        $result = parent::createAnalysisTemplate($args->toArray());
        return new CreateAnalysisTemplateResponse($result->toArray());
    }
}
