<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateClusterExtension;

trait CreateClusterExtensionTrait
{
    /**
     * @param CreateClusterExtensionRequest $args
     * @return CreateClusterExtensionResponse
     */
    public function createClusterExtension(CreateClusterExtensionRequest $args)
    {
        $result = parent::createClusterExtension($args->toArray());
        return new CreateClusterExtensionResponse($result->toArray());
    }
}
