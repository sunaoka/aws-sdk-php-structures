<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteEnvironmentTemplateVersion;

trait DeleteEnvironmentTemplateVersionTrait
{
    /**
     * @param DeleteEnvironmentTemplateVersionRequest $args
     * @return DeleteEnvironmentTemplateVersionResponse
     */
    public function deleteEnvironmentTemplateVersion(DeleteEnvironmentTemplateVersionRequest $args)
    {
        $result = parent::deleteEnvironmentTemplateVersion($args->toArray());
        return new DeleteEnvironmentTemplateVersionResponse($result->toArray());
    }
}
