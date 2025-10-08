<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterVersion;

trait UpdateClusterVersionTrait
{
    /**
     * @param UpdateClusterVersionRequest $args
     * @return UpdateClusterVersionResponse
     */
    public function updateClusterVersion(UpdateClusterVersionRequest $args)
    {
        $result = parent::updateClusterVersion($args->toArray());
        return new UpdateClusterVersionResponse($result->toArray());
    }
}
