<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceTemplate;

trait GetServiceTemplateTrait
{
    /**
     * @param GetServiceTemplateRequest $args
     * @return GetServiceTemplateResponse
     */
    public function getServiceTemplate(GetServiceTemplateRequest $args)
    {
        $result = parent::getServiceTemplate($args->toArray());
        return new GetServiceTemplateResponse($result->toArray());
    }
}
