<?php

namespace Sunaoka\Aws\Structures\IVS\PutMetadata;

trait PutMetadataTrait
{
    /**
     * @param PutMetadataRequest $args
     * @return void
     */
    public function putMetadata(PutMetadataRequest $args)
    {
        parent::putMetadata($args->toArray());
    }
}
