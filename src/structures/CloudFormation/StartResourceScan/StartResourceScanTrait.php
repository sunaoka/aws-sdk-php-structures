<?php

namespace Sunaoka\Aws\Structures\CloudFormation\StartResourceScan;

trait StartResourceScanTrait
{
    /**
     * @param StartResourceScanRequest $args
     * @return StartResourceScanResponse
     */
    public function startResourceScan(StartResourceScanRequest $args)
    {
        $result = parent::startResourceScan($args->toArray());
        return new StartResourceScanResponse($result->toArray());
    }
}
