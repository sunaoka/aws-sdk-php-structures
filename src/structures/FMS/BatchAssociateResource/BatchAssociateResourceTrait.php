<?php

namespace Sunaoka\Aws\Structures\FMS\BatchAssociateResource;

trait BatchAssociateResourceTrait
{
    /**
     * @param BatchAssociateResourceRequest $args
     * @return BatchAssociateResourceResponse
     */
    public function batchAssociateResource(BatchAssociateResourceRequest $args)
    {
        $result = parent::batchAssociateResource($args->toArray());
        return new BatchAssociateResourceResponse($result->toArray());
    }
}
