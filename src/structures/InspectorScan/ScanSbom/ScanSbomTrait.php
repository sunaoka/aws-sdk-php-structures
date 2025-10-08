<?php

namespace Sunaoka\Aws\Structures\InspectorScan\ScanSbom;

trait ScanSbomTrait
{
    /**
     * @param ScanSbomRequest $args
     * @return ScanSbomResponse
     */
    public function scanSbom(ScanSbomRequest $args)
    {
        $result = parent::scanSbom($args->toArray());
        return new ScanSbomResponse($result->toArray());
    }
}
