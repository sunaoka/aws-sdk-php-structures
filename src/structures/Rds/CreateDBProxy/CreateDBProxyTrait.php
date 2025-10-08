<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBProxy;

trait CreateDBProxyTrait
{
    /**
     * @param CreateDBProxyRequest $args
     * @return CreateDBProxyResponse
     */
    public function createDBProxy(CreateDBProxyRequest $args)
    {
        $result = parent::createDBProxy($args->toArray());
        return new CreateDBProxyResponse($result->toArray());
    }
}
