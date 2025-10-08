<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppTemplate;

trait GetInAppTemplateTrait
{
    /**
     * @param GetInAppTemplateRequest $args
     * @return GetInAppTemplateResponse
     */
    public function getInAppTemplate(GetInAppTemplateRequest $args)
    {
        $result = parent::getInAppTemplate($args->toArray());
        return new GetInAppTemplateResponse($result->toArray());
    }
}
