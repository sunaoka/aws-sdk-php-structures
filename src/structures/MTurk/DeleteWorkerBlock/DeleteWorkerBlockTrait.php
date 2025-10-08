<?php

namespace Sunaoka\Aws\Structures\MTurk\DeleteWorkerBlock;

trait DeleteWorkerBlockTrait
{
    /**
     * @param DeleteWorkerBlockRequest $args
     * @return DeleteWorkerBlockResponse
     */
    public function deleteWorkerBlock(DeleteWorkerBlockRequest $args)
    {
        $result = parent::deleteWorkerBlock($args->toArray());
        return new DeleteWorkerBlockResponse($result->toArray());
    }
}
