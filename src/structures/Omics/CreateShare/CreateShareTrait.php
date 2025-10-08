<?php

namespace Sunaoka\Aws\Structures\Omics\CreateShare;

trait CreateShareTrait
{
    /**
     * @param CreateShareRequest $args
     * @return CreateShareResponse
     */
    public function createShare(CreateShareRequest $args)
    {
        $result = parent::createShare($args->toArray());
        return new CreateShareResponse($result->toArray());
    }
}
