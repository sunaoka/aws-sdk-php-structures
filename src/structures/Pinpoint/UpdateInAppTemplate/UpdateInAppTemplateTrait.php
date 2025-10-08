<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateInAppTemplate;

trait UpdateInAppTemplateTrait
{
    /**
     * @param UpdateInAppTemplateRequest $args
     * @return UpdateInAppTemplateResponse
     */
    public function updateInAppTemplate(UpdateInAppTemplateRequest $args)
    {
        $result = parent::updateInAppTemplate($args->toArray());
        return new UpdateInAppTemplateResponse($result->toArray());
    }
}
