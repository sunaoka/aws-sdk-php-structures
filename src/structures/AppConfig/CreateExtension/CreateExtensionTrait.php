<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateExtension;

trait CreateExtensionTrait
{
    /**
     * @param CreateExtensionRequest $args
     * @return CreateExtensionResponse
     */
    public function createExtension(CreateExtensionRequest $args)
    {
        $result = parent::createExtension($args->toArray());
        return new CreateExtensionResponse($result->toArray());
    }
}
