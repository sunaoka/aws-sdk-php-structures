<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileObjectTypeTemplate;

trait GetProfileObjectTypeTemplateTrait
{
    /**
     * @param GetProfileObjectTypeTemplateRequest $args
     * @return GetProfileObjectTypeTemplateResponse
     */
    public function getProfileObjectTypeTemplate(GetProfileObjectTypeTemplateRequest $args)
    {
        $result = parent::getProfileObjectTypeTemplate($args->toArray());
        return new GetProfileObjectTypeTemplateResponse($result->toArray());
    }
}
