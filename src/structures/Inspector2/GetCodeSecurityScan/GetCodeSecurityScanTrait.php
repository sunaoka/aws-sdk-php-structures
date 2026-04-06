<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCodeSecurityScan;

trait GetCodeSecurityScanTrait
{
    /**
     * @param GetCodeSecurityScanRequest $args
     * @return GetCodeSecurityScanResponse
     */
    public function getCodeSecurityScan(GetCodeSecurityScanRequest $args)
    {
        $result = parent::getCodeSecurityScan($args->toArray());
        return new GetCodeSecurityScanResponse($result->toArray());
    }
}
