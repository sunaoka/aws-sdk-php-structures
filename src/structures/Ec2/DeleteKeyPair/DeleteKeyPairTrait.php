<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteKeyPair;

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
