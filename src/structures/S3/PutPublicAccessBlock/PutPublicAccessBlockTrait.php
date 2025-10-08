<?php

namespace Sunaoka\Aws\Structures\S3\PutPublicAccessBlock;

trait PutPublicAccessBlockTrait
{
    /**
     * @param PutPublicAccessBlockRequest $args
     * @return void
     */
    public function putPublicAccessBlock(PutPublicAccessBlockRequest $args)
    {
        parent::putPublicAccessBlock($args->toArray());
    }
}
