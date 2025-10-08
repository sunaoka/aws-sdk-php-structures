<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBProxy;

trait ModifyDBProxyTrait
{
    /**
     * @param ModifyDBProxyRequest $args
     * @return ModifyDBProxyResponse
     */
    public function modifyDBProxy(ModifyDBProxyRequest $args)
    {
        $result = parent::modifyDBProxy($args->toArray());
        return new ModifyDBProxyResponse($result->toArray());
    }
}
