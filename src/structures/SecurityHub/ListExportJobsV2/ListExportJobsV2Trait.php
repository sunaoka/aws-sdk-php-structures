<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListExportJobsV2;

trait ListExportJobsV2Trait
{
    /**
     * @param ListExportJobsV2Request $args
     * @return ListExportJobsV2Response
     */
    public function listExportJobsV2(ListExportJobsV2Request $args)
    {
        $result = parent::listExportJobsV2($args->toArray());
        return new ListExportJobsV2Response($result->toArray());
    }
}
