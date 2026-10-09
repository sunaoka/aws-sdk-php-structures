<?php

namespace Sunaoka\Aws\Structures\SecurityHub\StartExportJobV2;

trait StartExportJobV2Trait
{
    /**
     * @param StartExportJobV2Request $args
     * @return StartExportJobV2Response
     */
    public function startExportJobV2(StartExportJobV2Request $args)
    {
        $result = parent::startExportJobV2($args->toArray());
        return new StartExportJobV2Response($result->toArray());
    }
}
