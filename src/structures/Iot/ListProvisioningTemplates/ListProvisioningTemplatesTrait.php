<?php

namespace Sunaoka\Aws\Structures\Iot\ListProvisioningTemplates;

trait ListProvisioningTemplatesTrait
{
    /**
     * @param ListProvisioningTemplatesRequest $args
     * @return ListProvisioningTemplatesResponse
     */
    public function listProvisioningTemplates(ListProvisioningTemplatesRequest $args)
    {
        $result = parent::listProvisioningTemplates($args->toArray());
        return new ListProvisioningTemplatesResponse($result->toArray());
    }
}
