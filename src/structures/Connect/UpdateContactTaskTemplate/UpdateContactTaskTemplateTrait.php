<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactTaskTemplate;

trait UpdateContactTaskTemplateTrait
{
    /**
     * @param UpdateContactTaskTemplateRequest $args
     * @return UpdateContactTaskTemplateResponse
     */
    public function updateContactTaskTemplate(UpdateContactTaskTemplateRequest $args)
    {
        $result = parent::updateContactTaskTemplate($args->toArray());
        return new UpdateContactTaskTemplateResponse($result->toArray());
    }
}
