<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateWorkerBlock;

trait CreateWorkerBlockTrait
{
    /**
     * @param CreateWorkerBlockRequest $args
     * @return CreateWorkerBlockResponse
     */
    public function createWorkerBlock(CreateWorkerBlockRequest $args)
    {
        $result = parent::createWorkerBlock($args->toArray());
        return new CreateWorkerBlockResponse($result->toArray());
    }
}
