<?php

namespace Sunaoka\Aws\Structures\Omics\GetReference;

trait GetReferenceTrait
{
    /**
     * @param GetReferenceRequest $args
     * @return GetReferenceResponse
     */
    public function getReference(GetReferenceRequest $args)
    {
        $result = parent::getReference($args->toArray());
        return new GetReferenceResponse($result->toArray());
    }
}
