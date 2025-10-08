<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetLoaderJobStatus;

trait GetLoaderJobStatusTrait
{
    /**
     * @param GetLoaderJobStatusRequest $args
     * @return GetLoaderJobStatusResponse
     */
    public function getLoaderJobStatus(GetLoaderJobStatusRequest $args)
    {
        $result = parent::getLoaderJobStatus($args->toArray());
        return new GetLoaderJobStatusResponse($result->toArray());
    }
}
