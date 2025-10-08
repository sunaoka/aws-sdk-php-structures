<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans;

trait ListCisScansTrait
{
    /**
     * @param ListCisScansRequest $args
     * @return ListCisScansResponse
     */
    public function listCisScans(ListCisScansRequest $args)
    {
        $result = parent::listCisScans($args->toArray());
        return new ListCisScansResponse($result->toArray());
    }
}
