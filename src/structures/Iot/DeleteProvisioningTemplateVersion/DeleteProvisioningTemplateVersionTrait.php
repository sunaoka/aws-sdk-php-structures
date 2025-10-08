<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteProvisioningTemplateVersion;

trait DeleteProvisioningTemplateVersionTrait
{
    /**
     * @param DeleteProvisioningTemplateVersionRequest $args
     * @return DeleteProvisioningTemplateVersionResponse
     */
    public function deleteProvisioningTemplateVersion(DeleteProvisioningTemplateVersionRequest $args)
    {
        $result = parent::deleteProvisioningTemplateVersion($args->toArray());
        return new DeleteProvisioningTemplateVersionResponse($result->toArray());
    }
}
