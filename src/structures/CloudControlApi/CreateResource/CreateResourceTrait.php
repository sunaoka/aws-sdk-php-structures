<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\CreateResource;

trait CreateResourceTrait
{
    /**
     * @param CreateResourceRequest $args
     * @return CreateResourceResponse
     */
    public function createResource(CreateResourceRequest $args)
    {
        $result = parent::createResource($args->toArray());
        return new CreateResourceResponse($result->toArray());
    }
}
