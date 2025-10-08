<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAssociatedResource;

trait GetAssociatedResourceTrait
{
    /**
     * @param GetAssociatedResourceRequest $args
     * @return GetAssociatedResourceResponse
     */
    public function getAssociatedResource(GetAssociatedResourceRequest $args)
    {
        $result = parent::getAssociatedResource($args->toArray());
        return new GetAssociatedResourceResponse($result->toArray());
    }
}
