<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteJobTemplate;

trait DeleteJobTemplateTrait
{
    /**
     * @param DeleteJobTemplateRequest $args
     * @return void
     */
    public function deleteJobTemplate(DeleteJobTemplateRequest $args)
    {
        parent::deleteJobTemplate($args->toArray());
    }
}
