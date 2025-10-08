<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningPlatforms;

trait ListSigningPlatformsTrait
{
    /**
     * @param ListSigningPlatformsRequest $args
     * @return ListSigningPlatformsResponse
     */
    public function listSigningPlatforms(ListSigningPlatformsRequest $args)
    {
        $result = parent::listSigningPlatforms($args->toArray());
        return new ListSigningPlatformsResponse($result->toArray());
    }
}
