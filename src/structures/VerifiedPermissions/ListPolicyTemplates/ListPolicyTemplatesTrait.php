<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicyTemplates;

trait ListPolicyTemplatesTrait
{
    /**
     * @param ListPolicyTemplatesRequest $args
     * @return ListPolicyTemplatesResponse
     */
    public function listPolicyTemplates(ListPolicyTemplatesRequest $args)
    {
        $result = parent::listPolicyTemplates($args->toArray());
        return new ListPolicyTemplatesResponse($result->toArray());
    }
}
