<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceTemplate;

trait UpdateServiceTemplateTrait
{
    /**
     * @param UpdateServiceTemplateRequest $args
     * @return UpdateServiceTemplateResponse
     */
    public function updateServiceTemplate(UpdateServiceTemplateRequest $args)
    {
        $result = parent::updateServiceTemplate($args->toArray());
        return new UpdateServiceTemplateResponse($result->toArray());
    }
}
