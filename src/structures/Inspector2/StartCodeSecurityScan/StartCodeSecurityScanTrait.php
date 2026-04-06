<?php

namespace Sunaoka\Aws\Structures\Inspector2\StartCodeSecurityScan;

trait StartCodeSecurityScanTrait
{
    /**
     * @param StartCodeSecurityScanRequest $args
     * @return StartCodeSecurityScanResponse
     */
    public function startCodeSecurityScan(StartCodeSecurityScanRequest $args)
    {
        $result = parent::startCodeSecurityScan($args->toArray());
        return new StartCodeSecurityScanResponse($result->toArray());
    }
}
