<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicyTemplate;

trait CreatePolicyTemplateTrait
{
    /**
     * @param CreatePolicyTemplateRequest $args
     * @return CreatePolicyTemplateResponse
     */
    public function createPolicyTemplate(CreatePolicyTemplateRequest $args)
    {
        $result = parent::createPolicyTemplate($args->toArray());
        return new CreatePolicyTemplateResponse($result->toArray());
    }
}
