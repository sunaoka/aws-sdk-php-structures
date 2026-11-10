<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteClusterExtension;

trait DeleteClusterExtensionTrait
{
    /**
     * @param DeleteClusterExtensionRequest $args
     * @return DeleteClusterExtensionResponse
     */
    public function deleteClusterExtension(DeleteClusterExtensionRequest $args)
    {
        $result = parent::deleteClusterExtension($args->toArray());
        return new DeleteClusterExtensionResponse($result->toArray());
    }
}
