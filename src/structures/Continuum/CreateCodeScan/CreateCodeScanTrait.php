<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateCodeScan;

trait CreateCodeScanTrait
{
    /**
     * @param CreateCodeScanRequest $args
     * @return CreateCodeScanResponse
     */
    public function createCodeScan(CreateCodeScanRequest $args)
    {
        $result = parent::createCodeScan($args->toArray());
        return new CreateCodeScanResponse($result->toArray());
    }
}
