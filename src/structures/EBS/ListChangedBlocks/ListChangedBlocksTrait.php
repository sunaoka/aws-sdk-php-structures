<?php

namespace Sunaoka\Aws\Structures\EBS\ListChangedBlocks;

trait ListChangedBlocksTrait
{
    /**
     * @param ListChangedBlocksRequest $args
     * @return ListChangedBlocksResponse
     */
    public function listChangedBlocks(ListChangedBlocksRequest $args)
    {
        $result = parent::listChangedBlocks($args->toArray());
        return new ListChangedBlocksResponse($result->toArray());
    }
}
