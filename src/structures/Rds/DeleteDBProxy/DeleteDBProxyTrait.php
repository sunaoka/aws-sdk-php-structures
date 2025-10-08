<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBProxy;

trait DeleteDBProxyTrait
{
    /**
     * @param DeleteDBProxyRequest $args
     * @return DeleteDBProxyResponse
     */
    public function deleteDBProxy(DeleteDBProxyRequest $args)
    {
        $result = parent::deleteDBProxy($args->toArray());
        return new DeleteDBProxyResponse($result->toArray());
    }
}
