<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetCrl;

trait GetCrlTrait
{
    /**
     * @param GetCrlRequest $args
     * @return GetCrlResponse
     */
    public function getCrl(GetCrlRequest $args)
    {
        $result = parent::getCrl($args->toArray());
        return new GetCrlResponse($result->toArray());
    }
}
