<?php

namespace Sunaoka\Aws\Structures\FMS\BatchDisassociateResource;

trait BatchDisassociateResourceTrait
{
    /**
     * @param BatchDisassociateResourceRequest $args
     * @return BatchDisassociateResourceResponse
     */
    public function batchDisassociateResource(BatchDisassociateResourceRequest $args)
    {
        $result = parent::batchDisassociateResource($args->toArray());
        return new BatchDisassociateResourceResponse($result->toArray());
    }
}
