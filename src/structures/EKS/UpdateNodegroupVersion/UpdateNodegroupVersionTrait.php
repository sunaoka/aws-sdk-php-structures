<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupVersion;

trait UpdateNodegroupVersionTrait
{
    /**
     * @param UpdateNodegroupVersionRequest $args
     * @return UpdateNodegroupVersionResponse
     */
    public function updateNodegroupVersion(UpdateNodegroupVersionRequest $args)
    {
        $result = parent::updateNodegroupVersion($args->toArray());
        return new UpdateNodegroupVersionResponse($result->toArray());
    }
}
