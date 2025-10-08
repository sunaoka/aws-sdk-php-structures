<?php

namespace Sunaoka\Aws\Structures\Iot\ListProvisioningTemplateVersions;

trait ListProvisioningTemplateVersionsTrait
{
    /**
     * @param ListProvisioningTemplateVersionsRequest $args
     * @return ListProvisioningTemplateVersionsResponse
     */
    public function listProvisioningTemplateVersions(ListProvisioningTemplateVersionsRequest $args)
    {
        $result = parent::listProvisioningTemplateVersions($args->toArray());
        return new ListProvisioningTemplateVersionsResponse($result->toArray());
    }
}
