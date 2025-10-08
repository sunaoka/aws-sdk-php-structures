<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\CreateScan;

trait CreateScanTrait
{
    /**
     * @param CreateScanRequest $args
     * @return CreateScanResponse
     */
    public function createScan(CreateScanRequest $args)
    {
        $result = parent::createScan($args->toArray());
        return new CreateScanResponse($result->toArray());
    }
}
