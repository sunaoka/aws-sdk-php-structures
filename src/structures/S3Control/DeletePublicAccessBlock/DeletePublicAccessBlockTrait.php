<?php

namespace Sunaoka\Aws\Structures\S3Control\DeletePublicAccessBlock;

trait DeletePublicAccessBlockTrait
{
    /**
     * @param DeletePublicAccessBlockRequest $args
     * @return void
     */
    public function deletePublicAccessBlock(DeletePublicAccessBlockRequest $args)
    {
        parent::deletePublicAccessBlock($args->toArray());
    }
}
