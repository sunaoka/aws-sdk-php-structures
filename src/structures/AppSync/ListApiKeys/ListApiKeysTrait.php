<?php

namespace Sunaoka\Aws\Structures\AppSync\ListApiKeys;

trait ListApiKeysTrait
{
    /**
     * @param ListApiKeysRequest $args
     * @return ListApiKeysResponse
     */
    public function listApiKeys(ListApiKeysRequest $args)
    {
        $result = parent::listApiKeys($args->toArray());
        return new ListApiKeysResponse($result->toArray());
    }
}
