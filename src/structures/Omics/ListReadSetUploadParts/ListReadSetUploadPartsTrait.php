<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetUploadParts;

trait ListReadSetUploadPartsTrait
{
    /**
     * @param ListReadSetUploadPartsRequest $args
     * @return ListReadSetUploadPartsResponse
     */
    public function listReadSetUploadParts(ListReadSetUploadPartsRequest $args)
    {
        $result = parent::listReadSetUploadParts($args->toArray());
        return new ListReadSetUploadPartsResponse($result->toArray());
    }
}
