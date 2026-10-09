<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetExportJobV2;

trait GetExportJobV2Trait
{
    /**
     * @param GetExportJobV2Request $args
     * @return GetExportJobV2Response
     */
    public function getExportJobV2(GetExportJobV2Request $args)
    {
        $result = parent::getExportJobV2($args->toArray());
        return new GetExportJobV2Response($result->toArray());
    }
}
