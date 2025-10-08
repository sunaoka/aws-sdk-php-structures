<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeregisterResource;

trait DeregisterResourceTrait
{
    /**
     * @param DeregisterResourceRequest $args
     * @return DeregisterResourceResponse
     */
    public function deregisterResource(DeregisterResourceRequest $args)
    {
        $result = parent::deregisterResource($args->toArray());
        return new DeregisterResourceResponse($result->toArray());
    }
}
