<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\ListKeys;

trait ListKeysTrait
{
    /**
     * @param ListKeysRequest $args
     * @return ListKeysResponse
     */
    public function listKeys(ListKeysRequest $args)
    {
        $result = parent::listKeys($args->toArray());
        return new ListKeysResponse($result->toArray());
    }
}
