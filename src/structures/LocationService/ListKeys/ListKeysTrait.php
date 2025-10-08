<?php

namespace Sunaoka\Aws\Structures\LocationService\ListKeys;

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
