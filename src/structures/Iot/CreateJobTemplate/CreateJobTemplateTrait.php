<?php

namespace Sunaoka\Aws\Structures\Iot\CreateJobTemplate;

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
