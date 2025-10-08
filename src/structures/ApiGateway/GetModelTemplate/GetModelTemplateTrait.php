<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetModelTemplate;

trait GetModelTemplateTrait
{
    /**
     * @param GetModelTemplateRequest $args
     * @return GetModelTemplateResponse
     */
    public function getModelTemplate(GetModelTemplateRequest $args)
    {
        $result = parent::getModelTemplate($args->toArray());
        return new GetModelTemplateResponse($result->toArray());
    }
}
