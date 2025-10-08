<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteReference;

trait DeleteReferenceTrait
{
    /**
     * @param DeleteReferenceRequest $args
     * @return DeleteReferenceResponse
     */
    public function deleteReference(DeleteReferenceRequest $args)
    {
        $result = parent::deleteReference($args->toArray());
        return new DeleteReferenceResponse($result->toArray());
    }
}
