<?php

namespace Sunaoka\Aws\Structures\MPA\GetIdentitySource;

trait GetIdentitySourceTrait
{
    /**
     * @param GetIdentitySourceRequest $args
     * @return GetIdentitySourceResponse
     */
    public function getIdentitySource(GetIdentitySourceRequest $args)
    {
        $result = parent::getIdentitySource($args->toArray());
        return new GetIdentitySourceResponse($result->toArray());
    }
}
