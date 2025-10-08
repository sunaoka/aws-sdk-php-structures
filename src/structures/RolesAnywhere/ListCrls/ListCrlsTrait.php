<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ListCrls;

trait ListCrlsTrait
{
    /**
     * @param ListCrlsRequest $args
     * @return ListCrlsResponse
     */
    public function listCrls(ListCrlsRequest $args)
    {
        $result = parent::listCrls($args->toArray());
        return new ListCrlsResponse($result->toArray());
    }
}
