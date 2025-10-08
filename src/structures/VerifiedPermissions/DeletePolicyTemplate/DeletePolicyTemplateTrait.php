<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\DeletePolicyTemplate;

trait DeletePolicyTemplateTrait
{
    /**
     * @param DeletePolicyTemplateRequest $args
     * @return DeletePolicyTemplateResponse
     */
    public function deletePolicyTemplate(DeletePolicyTemplateRequest $args)
    {
        $result = parent::deletePolicyTemplate($args->toArray());
        return new DeletePolicyTemplateResponse($result->toArray());
    }
}
