<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteInAppTemplate;

trait DeleteInAppTemplateTrait
{
    /**
     * @param DeleteInAppTemplateRequest $args
     * @return DeleteInAppTemplateResponse
     */
    public function deleteInAppTemplate(DeleteInAppTemplateRequest $args)
    {
        $result = parent::deleteInAppTemplate($args->toArray());
        return new DeleteInAppTemplateResponse($result->toArray());
    }
}
