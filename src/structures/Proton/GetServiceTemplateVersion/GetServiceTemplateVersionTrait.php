<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceTemplateVersion;

trait GetServiceTemplateVersionTrait
{
    /**
     * @param GetServiceTemplateVersionRequest $args
     * @return GetServiceTemplateVersionResponse
     */
    public function getServiceTemplateVersion(GetServiceTemplateVersionRequest $args)
    {
        $result = parent::getServiceTemplateVersion($args->toArray());
        return new GetServiceTemplateVersionResponse($result->toArray());
    }
}
