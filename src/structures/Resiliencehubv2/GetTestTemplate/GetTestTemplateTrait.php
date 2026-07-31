<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTestTemplate;

trait GetTestTemplateTrait
{
    /**
     * @param GetTestTemplateRequest $args
     * @return GetTestTemplateResponse
     */
    public function getTestTemplate(GetTestTemplateRequest $args)
    {
        $result = parent::getTestTemplate($args->toArray());
        return new GetTestTemplateResponse($result->toArray());
    }
}
