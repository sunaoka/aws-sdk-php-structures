<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteKeyPair;

trait DeleteKeyPairTrait
{
    /**
     * @param DeleteKeyPairRequest $args
     * @return DeleteKeyPairResponse
     */
    public function deleteKeyPair(DeleteKeyPairRequest $args)
    {
        $result = parent::deleteKeyPair($args->toArray());
        return new DeleteKeyPairResponse($result->toArray());
    }
}
