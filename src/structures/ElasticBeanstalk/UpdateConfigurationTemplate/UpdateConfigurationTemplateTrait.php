<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateConfigurationTemplate;

trait UpdateConfigurationTemplateTrait
{
    /**
     * @param UpdateConfigurationTemplateRequest $args
     * @return UpdateConfigurationTemplateResponse
     */
    public function updateConfigurationTemplate(UpdateConfigurationTemplateRequest $args)
    {
        $result = parent::updateConfigurationTemplate($args->toArray());
        return new UpdateConfigurationTemplateResponse($result->toArray());
    }
}
