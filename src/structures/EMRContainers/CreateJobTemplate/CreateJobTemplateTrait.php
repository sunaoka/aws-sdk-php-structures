<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateJobTemplate;

trait CreateJobTemplateTrait
{
    /**
     * @param CreateJobTemplateRequest $args
     * @return CreateJobTemplateResponse
     */
    public function createJobTemplate(CreateJobTemplateRequest $args)
    {
        $result = parent::createJobTemplate($args->toArray());
        return new CreateJobTemplateResponse($result->toArray());
    }
}
