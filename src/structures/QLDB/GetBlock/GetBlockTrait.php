<?php

namespace Sunaoka\Aws\Structures\QLDB\GetBlock;

trait GetBlockTrait
{
    /**
     * @param GetBlockRequest $args
     * @return GetBlockResponse
     */
    public function getBlock(GetBlockRequest $args)
    {
        $result = parent::getBlock($args->toArray());
        return new GetBlockResponse($result->toArray());
    }
}
