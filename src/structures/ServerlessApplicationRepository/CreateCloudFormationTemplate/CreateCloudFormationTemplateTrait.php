<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateCloudFormationTemplate;

trait CreateCloudFormationTemplateTrait
{
    /**
     * @param CreateCloudFormationTemplateRequest $args
     * @return CreateCloudFormationTemplateResponse
     */
    public function createCloudFormationTemplate(CreateCloudFormationTemplateRequest $args)
    {
        $result = parent::createCloudFormationTemplate($args->toArray());
        return new CreateCloudFormationTemplateResponse($result->toArray());
    }
}
