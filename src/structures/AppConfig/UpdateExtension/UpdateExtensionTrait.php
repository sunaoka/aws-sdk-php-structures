<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExtension;

trait UpdateExtensionTrait
{
    /**
     * @param UpdateExtensionRequest $args
     * @return UpdateExtensionResponse
     */
    public function updateExtension(UpdateExtensionRequest $args)
    {
        $result = parent::updateExtension($args->toArray());
        return new UpdateExtensionResponse($result->toArray());
    }
}
