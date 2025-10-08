<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate;

trait GetJobTemplateTrait
{
    /**
     * @param GetJobTemplateRequest $args
     * @return GetJobTemplateResponse
     */
    public function getJobTemplate(GetJobTemplateRequest $args)
    {
        $result = parent::getJobTemplate($args->toArray());
        return new GetJobTemplateResponse($result->toArray());
    }
}
