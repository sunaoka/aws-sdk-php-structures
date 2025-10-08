<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate;

trait UpdateJobTemplateTrait
{
    /**
     * @param UpdateJobTemplateRequest $args
     * @return UpdateJobTemplateResponse
     */
    public function updateJobTemplate(UpdateJobTemplateRequest $args)
    {
        $result = parent::updateJobTemplate($args->toArray());
        return new UpdateJobTemplateResponse($result->toArray());
    }
}
