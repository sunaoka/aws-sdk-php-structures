<?php

namespace Sunaoka\Aws\Structures\Continuum\ListCodeScans;

trait ListCodeScansTrait
{
    /**
     * @param ListCodeScansRequest $args
     * @return ListCodeScansResponse
     */
    public function listCodeScans(ListCodeScansRequest $args)
    {
        $result = parent::listCodeScans($args->toArray());
        return new ListCodeScansResponse($result->toArray());
    }
}
