<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\StartResourceScan;

trait StartResourceScanTrait
{
    /**
     * @param StartResourceScanRequest $args
     * @return void
     */
    public function startResourceScan(StartResourceScanRequest $args)
    {
        parent::startResourceScan($args->toArray());
    }
}
