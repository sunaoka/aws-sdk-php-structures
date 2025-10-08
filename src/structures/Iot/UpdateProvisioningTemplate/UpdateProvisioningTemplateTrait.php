<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateProvisioningTemplate;

trait UpdateProvisioningTemplateTrait
{
    /**
     * @param UpdateProvisioningTemplateRequest $args
     * @return UpdateProvisioningTemplateResponse
     */
    public function updateProvisioningTemplate(UpdateProvisioningTemplateRequest $args)
    {
        $result = parent::updateProvisioningTemplate($args->toArray());
        return new UpdateProvisioningTemplateResponse($result->toArray());
    }
}
