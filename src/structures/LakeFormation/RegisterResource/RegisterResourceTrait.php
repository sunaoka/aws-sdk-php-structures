<?php

namespace Sunaoka\Aws\Structures\LakeFormation\RegisterResource;

trait RegisterResourceTrait
{
    /**
     * @param RegisterResourceRequest $args
     * @return RegisterResourceResponse
     */
    public function registerResource(RegisterResourceRequest $args)
    {
        $result = parent::registerResource($args->toArray());
        return new RegisterResourceResponse($result->toArray());
    }
}
