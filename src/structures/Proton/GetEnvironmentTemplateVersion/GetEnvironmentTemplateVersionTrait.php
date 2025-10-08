<?php

namespace Sunaoka\Aws\Structures\Proton\GetEnvironmentTemplateVersion;

trait GetEnvironmentTemplateVersionTrait
{
    /**
     * @param GetEnvironmentTemplateVersionRequest $args
     * @return GetEnvironmentTemplateVersionResponse
     */
    public function getEnvironmentTemplateVersion(GetEnvironmentTemplateVersionRequest $args)
    {
        $result = parent::getEnvironmentTemplateVersion($args->toArray());
        return new GetEnvironmentTemplateVersionResponse($result->toArray());
    }
}
