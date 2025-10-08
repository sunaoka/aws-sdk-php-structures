<?php

namespace Sunaoka\Aws\Structures\Route53\ListCidrBlocks;

trait ListCidrBlocksTrait
{
    /**
     * @param ListCidrBlocksRequest $args
     * @return ListCidrBlocksResponse
     */
    public function listCidrBlocks(ListCidrBlocksRequest $args)
    {
        $result = parent::listCidrBlocks($args->toArray());
        return new ListCidrBlocksResponse($result->toArray());
    }
}
