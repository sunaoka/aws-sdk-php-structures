<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateEnvironmentTemplate;

trait UpdateEnvironmentTemplateTrait
{
    /**
     * @param UpdateEnvironmentTemplateRequest $args
     * @return UpdateEnvironmentTemplateResponse
     */
    public function updateEnvironmentTemplate(UpdateEnvironmentTemplateRequest $args)
    {
        $result = parent::updateEnvironmentTemplate($args->toArray());
        return new UpdateEnvironmentTemplateResponse($result->toArray());
    }
}
