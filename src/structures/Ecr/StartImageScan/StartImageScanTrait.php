<?php

namespace Sunaoka\Aws\Structures\Ecr\StartImageScan;

trait StartImageScanTrait
{
    /**
     * @param StartImageScanRequest $args
     * @return StartImageScanResponse
     */
    public function startImageScan(StartImageScanRequest $args)
    {
        $result = parent::startImageScan($args->toArray());
        return new StartImageScanResponse($result->toArray());
    }
}
