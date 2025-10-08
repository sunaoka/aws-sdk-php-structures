<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\ListScans;

trait ListScansTrait
{
    /**
     * @param ListScansRequest $args
     * @return ListScansResponse
     */
    public function listScans(ListScansRequest $args)
    {
        $result = parent::listScans($args->toArray());
        return new ListScansResponse($result->toArray());
    }
}
