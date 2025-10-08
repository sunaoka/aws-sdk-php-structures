<?php

namespace Sunaoka\Aws\Structures\IVS\StartViewerSessionRevocation;

trait StartViewerSessionRevocationTrait
{
    /**
     * @param StartViewerSessionRevocationRequest $args
     * @return StartViewerSessionRevocationResponse
     */
    public function startViewerSessionRevocation(StartViewerSessionRevocationRequest $args)
    {
        $result = parent::startViewerSessionRevocation($args->toArray());
        return new StartViewerSessionRevocationResponse($result->toArray());
    }
}
