<?php

namespace Sunaoka\Aws\Structures\DataZone\StartDataSourceRun;

trait StartDataSourceRunTrait
{
    /**
     * @param StartDataSourceRunRequest $args
     * @return StartDataSourceRunResponse
     */
    public function startDataSourceRun(StartDataSourceRunRequest $args)
    {
        $result = parent::startDataSourceRun($args->toArray());
        return new StartDataSourceRunResponse($result->toArray());
    }
}
