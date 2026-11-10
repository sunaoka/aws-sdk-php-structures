<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterExtension;

trait UpdateClusterExtensionTrait
{
    /**
     * @param UpdateClusterExtensionRequest $args
     * @return UpdateClusterExtensionResponse
     */
    public function updateClusterExtension(UpdateClusterExtensionRequest $args)
    {
        $result = parent::updateClusterExtension($args->toArray());
        return new UpdateClusterExtensionResponse($result->toArray());
    }
}
