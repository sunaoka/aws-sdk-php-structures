<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAPIKeys;

trait ListAPIKeysTrait
{
    /**
     * @param ListAPIKeysRequest $args
     * @return ListAPIKeysResponse
     */
    public function listAPIKeys(ListAPIKeysRequest $args)
    {
        $result = parent::listAPIKeys($args->toArray());
        return new ListAPIKeysResponse($result->toArray());
    }
}
