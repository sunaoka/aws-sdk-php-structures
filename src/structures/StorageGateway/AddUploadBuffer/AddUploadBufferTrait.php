<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AddUploadBuffer;

trait AddUploadBufferTrait
{
    /**
     * @param AddUploadBufferRequest $args
     * @return AddUploadBufferResponse
     */
    public function addUploadBuffer(AddUploadBufferRequest $args)
    {
        $result = parent::addUploadBuffer($args->toArray());
        return new AddUploadBufferResponse($result->toArray());
    }
}
