<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteBatch;

trait DeleteBatchTrait
{
    /**
     * @param DeleteBatchRequest $args
     * @return void
     */
    public function deleteBatch(DeleteBatchRequest $args)
    {
        parent::deleteBatch($args->toArray());
    }
}
