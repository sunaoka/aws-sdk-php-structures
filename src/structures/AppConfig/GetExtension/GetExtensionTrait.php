<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetExtension;

trait GetExtensionTrait
{
    /**
     * @param GetExtensionRequest $args
     * @return GetExtensionResponse
     */
    public function getExtension(GetExtensionRequest $args)
    {
        $result = parent::getExtension($args->toArray());
        return new GetExtensionResponse($result->toArray());
    }
}
