<?php

namespace Sunaoka\Aws\Structures\AppRegistry\AssociateResource;

trait AssociateResourceTrait
{
    /**
     * @param AssociateResourceRequest $args
     * @return AssociateResourceResponse
     */
    public function associateResource(AssociateResourceRequest $args)
    {
        $result = parent::associateResource($args->toArray());
        return new AssociateResourceResponse($result->toArray());
    }
}
