<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListActs;

trait ListActsTrait
{
    /**
     * @param ListActsRequest $args
     * @return ListActsResponse
     */
    public function listActs(ListActsRequest $args)
    {
        $result = parent::listActs($args->toArray());
        return new ListActsResponse($result->toArray());
    }
}
