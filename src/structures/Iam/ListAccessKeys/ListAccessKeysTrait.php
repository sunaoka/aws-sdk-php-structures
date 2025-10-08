<?php

namespace Sunaoka\Aws\Structures\Iam\ListAccessKeys;

trait ListAccessKeysTrait
{
    /**
     * @param ListAccessKeysRequest $args
     * @return ListAccessKeysResponse
     */
    public function listAccessKeys(ListAccessKeysRequest $args)
    {
        $result = parent::listAccessKeys($args->toArray());
        return new ListAccessKeysResponse($result->toArray());
    }
}
