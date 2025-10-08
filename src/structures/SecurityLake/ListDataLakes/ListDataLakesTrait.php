<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListDataLakes;

trait ListDataLakesTrait
{
    /**
     * @param ListDataLakesRequest $args
     * @return ListDataLakesResponse
     */
    public function listDataLakes(ListDataLakesRequest $args)
    {
        $result = parent::listDataLakes($args->toArray());
        return new ListDataLakesResponse($result->toArray());
    }
}
