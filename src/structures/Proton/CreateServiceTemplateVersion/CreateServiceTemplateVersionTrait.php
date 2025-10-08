<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceTemplateVersion;

trait CreateServiceTemplateVersionTrait
{
    /**
     * @param CreateServiceTemplateVersionRequest $args
     * @return CreateServiceTemplateVersionResponse
     */
    public function createServiceTemplateVersion(CreateServiceTemplateVersionRequest $args)
    {
        $result = parent::createServiceTemplateVersion($args->toArray());
        return new CreateServiceTemplateVersionResponse($result->toArray());
    }
}
