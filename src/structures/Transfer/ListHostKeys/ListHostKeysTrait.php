<?php

namespace Sunaoka\Aws\Structures\Transfer\ListHostKeys;

trait ListHostKeysTrait
{
    /**
     * @param ListHostKeysRequest $args
     * @return ListHostKeysResponse
     */
    public function listHostKeys(ListHostKeysRequest $args)
    {
        $result = parent::listHostKeys($args->toArray());
        return new ListHostKeysResponse($result->toArray());
    }
}
