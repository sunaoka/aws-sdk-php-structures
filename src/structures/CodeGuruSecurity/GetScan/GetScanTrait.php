<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetScan;

trait GetScanTrait
{
    /**
     * @param GetScanRequest $args
     * @return GetScanResponse
     */
    public function getScan(GetScanRequest $args)
    {
        $result = parent::getScan($args->toArray());
        return new GetScanResponse($result->toArray());
    }
}
