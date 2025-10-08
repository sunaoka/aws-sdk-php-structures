<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteProvisioningTemplate;

trait DeleteProvisioningTemplateTrait
{
    /**
     * @param DeleteProvisioningTemplateRequest $args
     * @return DeleteProvisioningTemplateResponse
     */
    public function deleteProvisioningTemplate(DeleteProvisioningTemplateRequest $args)
    {
        $result = parent::deleteProvisioningTemplate($args->toArray());
        return new DeleteProvisioningTemplateResponse($result->toArray());
    }
}
