<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicyTemplate;

trait GetPolicyTemplateTrait
{
    /**
     * @param GetPolicyTemplateRequest $args
     * @return GetPolicyTemplateResponse
     */
    public function getPolicyTemplate(GetPolicyTemplateRequest $args)
    {
        $result = parent::getPolicyTemplate($args->toArray());
        return new GetPolicyTemplateResponse($result->toArray());
    }
}
