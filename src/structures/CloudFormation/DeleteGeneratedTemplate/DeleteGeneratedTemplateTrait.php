<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeleteGeneratedTemplate;

trait DeleteGeneratedTemplateTrait
{
    /**
     * @param DeleteGeneratedTemplateRequest $args
     * @return void
     */
    public function deleteGeneratedTemplate(DeleteGeneratedTemplateRequest $args)
    {
        parent::deleteGeneratedTemplate($args->toArray());
    }
}
