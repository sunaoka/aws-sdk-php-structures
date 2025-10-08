<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateKeyPair;

trait CreateKeyPairTrait
{
    /**
     * @param CreateKeyPairRequest $args
     * @return CreateKeyPairResponse
     */
    public function createKeyPair(CreateKeyPairRequest $args)
    {
        $result = parent::createKeyPair($args->toArray());
        return new CreateKeyPairResponse($result->toArray());
    }
}
