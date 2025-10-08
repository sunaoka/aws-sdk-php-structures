<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DisassociateMacSecKey;

trait DisassociateMacSecKeyTrait
{
    /**
     * @param DisassociateMacSecKeyRequest $args
     * @return DisassociateMacSecKeyResponse
     */
    public function disassociateMacSecKey(DisassociateMacSecKeyRequest $args)
    {
        $result = parent::disassociateMacSecKey($args->toArray());
        return new DisassociateMacSecKeyResponse($result->toArray());
    }
}
