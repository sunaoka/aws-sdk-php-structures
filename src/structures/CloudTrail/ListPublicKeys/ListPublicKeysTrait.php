<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListPublicKeys;

trait ListPublicKeysTrait
{
    /**
     * @param ListPublicKeysRequest $args
     * @return ListPublicKeysResponse
     */
    public function listPublicKeys(ListPublicKeysRequest $args)
    {
        $result = parent::listPublicKeys($args->toArray());
        return new ListPublicKeysResponse($result->toArray());
    }
}
