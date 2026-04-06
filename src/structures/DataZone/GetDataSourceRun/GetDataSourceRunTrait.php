<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataSourceRun;

trait GetDataSourceRunTrait
{
    /**
     * @param GetDataSourceRunRequest $args
     * @return GetDataSourceRunResponse
     */
    public function getDataSourceRun(GetDataSourceRunRequest $args)
    {
        $result = parent::getDataSourceRun($args->toArray());
        return new GetDataSourceRunResponse($result->toArray());
    }
}
