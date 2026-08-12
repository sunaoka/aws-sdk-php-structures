<?php

namespace Sunaoka\Aws\Structures\Iam\GetRoleTemplateVersion;

trait GetRoleTemplateVersionTrait
{
    /**
     * @param GetRoleTemplateVersionRequest $args
     * @return GetRoleTemplateVersionResponse
     */
    public function getRoleTemplateVersion(GetRoleTemplateVersionRequest $args)
    {
        $result = parent::getRoleTemplateVersion($args->toArray());
        return new GetRoleTemplateVersionResponse($result->toArray());
    }
}
