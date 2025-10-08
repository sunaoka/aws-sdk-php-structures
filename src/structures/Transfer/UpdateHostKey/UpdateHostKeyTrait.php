<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateHostKey;

trait UpdateHostKeyTrait
{
    /**
     * @param UpdateHostKeyRequest $args
     * @return UpdateHostKeyResponse
     */
    public function updateHostKey(UpdateHostKeyRequest $args)
    {
        $result = parent::updateHostKey($args->toArray());
        return new UpdateHostKeyResponse($result->toArray());
    }
}
