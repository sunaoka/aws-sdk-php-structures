<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetModelTemplate;

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
