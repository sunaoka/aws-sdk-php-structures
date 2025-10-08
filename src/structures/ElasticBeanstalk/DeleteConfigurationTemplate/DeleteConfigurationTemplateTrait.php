<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DeleteConfigurationTemplate;

trait DeleteConfigurationTemplateTrait
{
    /**
     * @param DeleteConfigurationTemplateRequest $args
     * @return void
     */
    public function deleteConfigurationTemplate(DeleteConfigurationTemplateRequest $args)
    {
        parent::deleteConfigurationTemplate($args->toArray());
    }
}
