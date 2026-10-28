<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListOnDemandScans;

trait ListOnDemandScansTrait
{
    /**
     * @param ListOnDemandScansRequest $args
     * @return ListOnDemandScansResponse
     */
    public function listOnDemandScans(ListOnDemandScansRequest $args)
    {
        $result = parent::listOnDemandScans($args->toArray());
        return new ListOnDemandScansResponse($result->toArray());
    }
}
