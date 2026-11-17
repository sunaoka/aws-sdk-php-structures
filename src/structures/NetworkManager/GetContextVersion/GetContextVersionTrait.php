<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetContextVersion;

trait GetContextVersionTrait
{
    /**
     * @param GetContextVersionRequest $args
     * @return GetContextVersionResponse
     */
    public function getContextVersion(GetContextVersionRequest $args)
    {
        $result = parent::getContextVersion($args->toArray());
        return new GetContextVersionResponse($result->toArray());
    }
}
