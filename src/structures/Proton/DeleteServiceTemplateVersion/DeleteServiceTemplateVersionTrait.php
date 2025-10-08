<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteServiceTemplateVersion;

trait DeleteServiceTemplateVersionTrait
{
    /**
     * @param DeleteServiceTemplateVersionRequest $args
     * @return DeleteServiceTemplateVersionResponse
     */
    public function deleteServiceTemplateVersion(DeleteServiceTemplateVersionRequest $args)
    {
        $result = parent::deleteServiceTemplateVersion($args->toArray());
        return new DeleteServiceTemplateVersionResponse($result->toArray());
    }
}
