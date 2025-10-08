<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamKeys;

trait ListStreamKeysTrait
{
    /**
     * @param ListStreamKeysRequest $args
     * @return ListStreamKeysResponse
     */
    public function listStreamKeys(ListStreamKeysRequest $args)
    {
        $result = parent::listStreamKeys($args->toArray());
        return new ListStreamKeysResponse($result->toArray());
    }
}
