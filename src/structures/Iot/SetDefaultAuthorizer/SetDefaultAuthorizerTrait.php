<?php

namespace Sunaoka\Aws\Structures\Iot\SetDefaultAuthorizer;

trait SetDefaultAuthorizerTrait
{
    /**
     * @param SetDefaultAuthorizerRequest $args
     * @return SetDefaultAuthorizerResponse
     */
    public function setDefaultAuthorizer(SetDefaultAuthorizerRequest $args)
    {
        $result = parent::setDefaultAuthorizer($args->toArray());
        return new SetDefaultAuthorizerResponse($result->toArray());
    }
}
