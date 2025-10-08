<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetKeyPairs;

trait GetKeyPairsTrait
{
    /**
     * @param GetKeyPairsRequest $args
     * @return GetKeyPairsResponse
     */
    public function getKeyPairs(GetKeyPairsRequest $args)
    {
        $result = parent::getKeyPairs($args->toArray());
        return new GetKeyPairsResponse($result->toArray());
    }
}
