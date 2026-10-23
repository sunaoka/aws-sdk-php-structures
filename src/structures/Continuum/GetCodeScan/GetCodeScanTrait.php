<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeScan;

trait GetCodeScanTrait
{
    /**
     * @param GetCodeScanRequest $args
     * @return GetCodeScanResponse
     */
    public function getCodeScan(GetCodeScanRequest $args)
    {
        $result = parent::getCodeScan($args->toArray());
        return new GetCodeScanResponse($result->toArray());
    }
}
