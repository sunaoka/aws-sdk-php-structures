<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteKnownHostKeys;

trait DeleteKnownHostKeysTrait
{
    /**
     * @param DeleteKnownHostKeysRequest $args
     * @return DeleteKnownHostKeysResponse
     */
    public function deleteKnownHostKeys(DeleteKnownHostKeysRequest $args)
    {
        $result = parent::deleteKnownHostKeys($args->toArray());
        return new DeleteKnownHostKeysResponse($result->toArray());
    }
}
