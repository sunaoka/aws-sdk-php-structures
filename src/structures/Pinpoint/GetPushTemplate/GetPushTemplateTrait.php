<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetPushTemplate;

trait GetPushTemplateTrait
{
    /**
     * @param GetPushTemplateRequest $args
     * @return GetPushTemplateResponse
     */
    public function getPushTemplate(GetPushTemplateRequest $args)
    {
        $result = parent::getPushTemplate($args->toArray());
        return new GetPushTemplateResponse($result->toArray());
    }
}
