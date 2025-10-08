<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateAnalysisTemplate;

trait UpdateAnalysisTemplateTrait
{
    /**
     * @param UpdateAnalysisTemplateRequest $args
     * @return UpdateAnalysisTemplateResponse
     */
    public function updateAnalysisTemplate(UpdateAnalysisTemplateRequest $args)
    {
        $result = parent::updateAnalysisTemplate($args->toArray());
        return new UpdateAnalysisTemplateResponse($result->toArray());
    }
}
