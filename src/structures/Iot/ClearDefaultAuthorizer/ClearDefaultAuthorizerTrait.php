<?php

namespace Sunaoka\Aws\Structures\Iot\ClearDefaultAuthorizer;

trait ClearDefaultAuthorizerTrait
{
    /**
     * @param ClearDefaultAuthorizerRequest $args
     * @return ClearDefaultAuthorizerResponse
     */
    public function clearDefaultAuthorizer(ClearDefaultAuthorizerRequest $args)
    {
        $result = parent::clearDefaultAuthorizer($args->toArray());
        return new ClearDefaultAuthorizerResponse($result->toArray());
    }
}
