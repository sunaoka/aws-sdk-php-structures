<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateKey;

trait UpdateKeyTrait
{
    /**
     * @param UpdateKeyRequest $args
     * @return UpdateKeyResponse
     */
    public function updateKey(UpdateKeyRequest $args)
    {
        $result = parent::updateKey($args->toArray());
        return new UpdateKeyResponse($result->toArray());
    }
}
