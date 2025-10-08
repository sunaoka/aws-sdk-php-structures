<?php

namespace Sunaoka\Aws\Structures\Iot\CreateProvisioningTemplate;

trait CreateProvisioningTemplateTrait
{
    /**
     * @param CreateProvisioningTemplateRequest $args
     * @return CreateProvisioningTemplateResponse
     */
    public function createProvisioningTemplate(CreateProvisioningTemplateRequest $args)
    {
        $result = parent::createProvisioningTemplate($args->toArray());
        return new CreateProvisioningTemplateResponse($result->toArray());
    }
}
