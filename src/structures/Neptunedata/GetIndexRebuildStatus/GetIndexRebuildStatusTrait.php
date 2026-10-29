<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetIndexRebuildStatus;

trait GetIndexRebuildStatusTrait
{
    /**
     * @param GetIndexRebuildStatusRequest $args
     * @return GetIndexRebuildStatusResponse
     */
    public function getIndexRebuildStatus(GetIndexRebuildStatusRequest $args)
    {
        $result = parent::getIndexRebuildStatus($args->toArray());
        return new GetIndexRebuildStatusResponse($result->toArray());
    }
}
