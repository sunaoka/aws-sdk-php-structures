<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateEnvironmentTemplateVersion;

trait UpdateEnvironmentTemplateVersionTrait
{
    /**
     * @param UpdateEnvironmentTemplateVersionRequest $args
     * @return UpdateEnvironmentTemplateVersionResponse
     */
    public function updateEnvironmentTemplateVersion(UpdateEnvironmentTemplateVersionRequest $args)
    {
        $result = parent::updateEnvironmentTemplateVersion($args->toArray());
        return new UpdateEnvironmentTemplateVersionResponse($result->toArray());
    }
}
