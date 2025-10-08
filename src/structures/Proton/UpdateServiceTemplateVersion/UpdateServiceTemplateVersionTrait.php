<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceTemplateVersion;

trait UpdateServiceTemplateVersionTrait
{
    /**
     * @param UpdateServiceTemplateVersionRequest $args
     * @return UpdateServiceTemplateVersionResponse
     */
    public function updateServiceTemplateVersion(UpdateServiceTemplateVersionRequest $args)
    {
        $result = parent::updateServiceTemplateVersion($args->toArray());
        return new UpdateServiceTemplateVersionResponse($result->toArray());
    }
}
