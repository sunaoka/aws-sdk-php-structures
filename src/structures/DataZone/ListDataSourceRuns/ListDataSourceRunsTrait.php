<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRuns;

trait ListDataSourceRunsTrait
{
    /**
     * @param ListDataSourceRunsRequest $args
     * @return ListDataSourceRunsResponse
     */
    public function listDataSourceRuns(ListDataSourceRunsRequest $args)
    {
        $result = parent::listDataSourceRuns($args->toArray());
        return new ListDataSourceRunsResponse($result->toArray());
    }
}
