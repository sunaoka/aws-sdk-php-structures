<?php

namespace Sunaoka\Aws\Structures\Omics\UploadReadSetPart;

trait UploadReadSetPartTrait
{
    /**
     * @param UploadReadSetPartRequest $args
     * @return UploadReadSetPartResponse
     */
    public function uploadReadSetPart(UploadReadSetPartRequest $args)
    {
        $result = parent::uploadReadSetPart($args->toArray());
        return new UploadReadSetPartResponse($result->toArray());
    }
}
