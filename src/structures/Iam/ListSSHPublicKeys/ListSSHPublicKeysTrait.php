<?php

namespace Sunaoka\Aws\Structures\Iam\ListSSHPublicKeys;

trait ListSSHPublicKeysTrait
{
    /**
     * @param ListSSHPublicKeysRequest $args
     * @return ListSSHPublicKeysResponse
     */
    public function listSSHPublicKeys(ListSSHPublicKeysRequest $args)
    {
        $result = parent::listSSHPublicKeys($args->toArray());
        return new ListSSHPublicKeysResponse($result->toArray());
    }
}
