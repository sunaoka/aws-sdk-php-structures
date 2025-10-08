<?php

namespace Sunaoka\Aws\Structures\ImportExport\GetStatus;

trait GetStatusTrait
{
    /**
     * @param GetStatusRequest $args
     * @return GetStatusResponse
     */
    public function getStatus(GetStatusRequest $args)
    {
        $result = parent::getStatus($args->toArray());
        return new GetStatusResponse($result->toArray());
    }
}
