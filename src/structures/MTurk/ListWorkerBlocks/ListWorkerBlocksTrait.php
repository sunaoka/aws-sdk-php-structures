<?php

namespace Sunaoka\Aws\Structures\MTurk\ListWorkerBlocks;

trait ListWorkerBlocksTrait
{
    /**
     * @param ListWorkerBlocksRequest $args
     * @return ListWorkerBlocksResponse
     */
    public function listWorkerBlocks(ListWorkerBlocksRequest $args)
    {
        $result = parent::listWorkerBlocks($args->toArray());
        return new ListWorkerBlocksResponse($result->toArray());
    }
}
