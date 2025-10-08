<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecretVersionIds;

trait ListSecretVersionIdsTrait
{
    /**
     * @param ListSecretVersionIdsRequest $args
     * @return ListSecretVersionIdsResponse
     */
    public function listSecretVersionIds(ListSecretVersionIdsRequest $args)
    {
        $result = parent::listSecretVersionIds($args->toArray());
        return new ListSecretVersionIdsResponse($result->toArray());
    }
}
