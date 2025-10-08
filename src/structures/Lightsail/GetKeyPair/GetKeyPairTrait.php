<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetKeyPair;

trait GetKeyPairTrait
{
    /**
     * @param GetKeyPairRequest $args
     * @return GetKeyPairResponse
     */
    public function getKeyPair(GetKeyPairRequest $args)
    {
        $result = parent::getKeyPair($args->toArray());
        return new GetKeyPairResponse($result->toArray());
    }
}
