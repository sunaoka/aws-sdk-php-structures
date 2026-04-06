<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScans;

trait ListResourceScansTrait
{
    /**
     * @param ListResourceScansRequest $args
     * @return ListResourceScansResponse
     */
    public function listResourceScans(ListResourceScansRequest $args)
    {
        $result = parent::listResourceScans($args->toArray());
        return new ListResourceScansResponse($result->toArray());
    }
}
