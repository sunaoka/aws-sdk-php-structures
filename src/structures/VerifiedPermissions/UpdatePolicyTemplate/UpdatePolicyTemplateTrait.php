<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdatePolicyTemplate;

trait UpdatePolicyTemplateTrait
{
    /**
     * @param UpdatePolicyTemplateRequest $args
     * @return UpdatePolicyTemplateResponse
     */
    public function updatePolicyTemplate(UpdatePolicyTemplateRequest $args)
    {
        $result = parent::updatePolicyTemplate($args->toArray());
        return new UpdatePolicyTemplateResponse($result->toArray());
    }
}
