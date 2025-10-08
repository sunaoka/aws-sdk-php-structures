<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\EnableCrl;

trait EnableCrlTrait
{
    /**
     * @param EnableCrlRequest $args
     * @return EnableCrlResponse
     */
    public function enableCrl(EnableCrlRequest $args)
    {
        $result = parent::enableCrl($args->toArray());
        return new EnableCrlResponse($result->toArray());
    }
}
