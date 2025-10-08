<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\GetCloudFormationTemplate;

trait GetCloudFormationTemplateTrait
{
    /**
     * @param GetCloudFormationTemplateRequest $args
     * @return GetCloudFormationTemplateResponse
     */
    public function getCloudFormationTemplate(GetCloudFormationTemplateRequest $args)
    {
        $result = parent::getCloudFormationTemplate($args->toArray());
        return new GetCloudFormationTemplateResponse($result->toArray());
    }
}
