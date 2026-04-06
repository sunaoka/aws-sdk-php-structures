<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterSoftware;

trait UpdateClusterSoftwareTrait
{
    /**
     * @param UpdateClusterSoftwareRequest $args
     * @return UpdateClusterSoftwareResponse
     */
    public function updateClusterSoftware(UpdateClusterSoftwareRequest $args)
    {
        $result = parent::updateClusterSoftware($args->toArray());
        return new UpdateClusterSoftwareResponse($result->toArray());
    }
}
