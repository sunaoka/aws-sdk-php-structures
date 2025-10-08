<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DeleteJobTemplate;

trait DeleteJobTemplateTrait
{
    /**
     * @param DeleteJobTemplateRequest $args
     * @return DeleteJobTemplateResponse
     */
    public function deleteJobTemplate(DeleteJobTemplateRequest $args)
    {
        $result = parent::deleteJobTemplate($args->toArray());
        return new DeleteJobTemplateResponse($result->toArray());
    }
}
