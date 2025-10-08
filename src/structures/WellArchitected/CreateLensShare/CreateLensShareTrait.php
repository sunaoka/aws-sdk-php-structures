<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateLensShare;

trait CreateLensShareTrait
{
    /**
     * @param CreateLensShareRequest $args
     * @return CreateLensShareResponse
     */
    public function createLensShare(CreateLensShareRequest $args)
    {
        $result = parent::createLensShare($args->toArray());
        return new CreateLensShareResponse($result->toArray());
    }
}
