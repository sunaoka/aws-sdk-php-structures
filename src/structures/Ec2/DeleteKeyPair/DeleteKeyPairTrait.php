<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteKeyPair;

trait DeleteKeyPairTrait
{
    /**
     * @param DeleteKeyPairRequest $args
     * @return void
     */
    public function deleteKeyPair(DeleteKeyPairRequest $args)
    {
        parent::deleteKeyPair($args->toArray());
    }
}
