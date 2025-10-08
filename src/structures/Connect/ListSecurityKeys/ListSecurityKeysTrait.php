<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityKeys;

trait ListSecurityKeysTrait
{
    /**
     * @param ListSecurityKeysRequest $args
     * @return ListSecurityKeysResponse
     */
    public function listSecurityKeys(ListSecurityKeysRequest $args)
    {
        $result = parent::listSecurityKeys($args->toArray());
        return new ListSecurityKeysResponse($result->toArray());
    }
}
