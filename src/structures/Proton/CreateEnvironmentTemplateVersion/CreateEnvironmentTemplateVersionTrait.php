<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironmentTemplateVersion;

trait CreateEnvironmentTemplateVersionTrait
{
    /**
     * @param CreateEnvironmentTemplateVersionRequest $args
     * @return CreateEnvironmentTemplateVersionResponse
     */
    public function createEnvironmentTemplateVersion(CreateEnvironmentTemplateVersionRequest $args)
    {
        $result = parent::createEnvironmentTemplateVersion($args->toArray());
        return new CreateEnvironmentTemplateVersionResponse($result->toArray());
    }
}
