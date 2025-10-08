<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateInAppTemplate;

trait CreateInAppTemplateTrait
{
    /**
     * @param CreateInAppTemplateRequest $args
     * @return CreateInAppTemplateResponse
     */
    public function createInAppTemplate(CreateInAppTemplateRequest $args)
    {
        $result = parent::createInAppTemplate($args->toArray());
        return new CreateInAppTemplateResponse($result->toArray());
    }
}
