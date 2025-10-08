<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AssociateMacSecKey;

trait AssociateMacSecKeyTrait
{
    /**
     * @param AssociateMacSecKeyRequest $args
     * @return AssociateMacSecKeyResponse
     */
    public function associateMacSecKey(AssociateMacSecKeyRequest $args)
    {
        $result = parent::associateMacSecKey($args->toArray());
        return new AssociateMacSecKeyResponse($result->toArray());
    }
}
