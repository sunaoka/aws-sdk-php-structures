<?php

namespace Sunaoka\Aws\Structures\Inspector2\StartOnDemandScan;

trait StartOnDemandScanTrait
{
    /**
     * @param StartOnDemandScanRequest $args
     * @return StartOnDemandScanResponse
     */
    public function startOnDemandScan(StartOnDemandScanRequest $args)
    {
        $result = parent::startOnDemandScan($args->toArray());
        return new StartOnDemandScanResponse($result->toArray());
    }
}
