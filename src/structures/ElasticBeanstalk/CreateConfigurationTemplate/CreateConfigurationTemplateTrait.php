<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateConfigurationTemplate;

trait CreateConfigurationTemplateTrait
{
    /**
     * @param CreateConfigurationTemplateRequest $args
     * @return CreateConfigurationTemplateResponse
     */
    public function createConfigurationTemplate(CreateConfigurationTemplateRequest $args)
    {
        $result = parent::createConfigurationTemplate($args->toArray());
        return new CreateConfigurationTemplateResponse($result->toArray());
    }
}
