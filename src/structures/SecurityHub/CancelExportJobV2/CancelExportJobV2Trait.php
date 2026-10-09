<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CancelExportJobV2;

trait CancelExportJobV2Trait
{
    /**
     * @param CancelExportJobV2Request $args
     * @return CancelExportJobV2Response
     */
    public function cancelExportJobV2(CancelExportJobV2Request $args)
    {
        $result = parent::cancelExportJobV2($args->toArray());
        return new CancelExportJobV2Response($result->toArray());
    }
}
