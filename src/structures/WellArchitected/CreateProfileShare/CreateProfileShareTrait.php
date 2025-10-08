<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateProfileShare;

trait CreateProfileShareTrait
{
    /**
     * @param CreateProfileShareRequest $args
     * @return CreateProfileShareResponse
     */
    public function createProfileShare(CreateProfileShareRequest $args)
    {
        $result = parent::createProfileShare($args->toArray());
        return new CreateProfileShareResponse($result->toArray());
    }
}
