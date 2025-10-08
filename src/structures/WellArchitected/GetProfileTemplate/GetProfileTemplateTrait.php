<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetProfileTemplate;

trait GetProfileTemplateTrait
{
    /**
     * @param GetProfileTemplateRequest $args
     * @return GetProfileTemplateResponse
     */
    public function getProfileTemplate(GetProfileTemplateRequest $args)
    {
        $result = parent::getProfileTemplate($args->toArray());
        return new GetProfileTemplateResponse($result->toArray());
    }
}
