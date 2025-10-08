<?php

namespace Sunaoka\Aws\Structures\Iot\CreateProvisioningTemplateVersion;

trait CreateProvisioningTemplateVersionTrait
{
    /**
     * @param CreateProvisioningTemplateVersionRequest $args
     * @return CreateProvisioningTemplateVersionResponse
     */
    public function createProvisioningTemplateVersion(CreateProvisioningTemplateVersionRequest $args)
    {
        $result = parent::createProvisioningTemplateVersion($args->toArray());
        return new CreateProvisioningTemplateVersionResponse($result->toArray());
    }
}
