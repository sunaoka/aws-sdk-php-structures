<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListDetectors;

trait ListDetectorsTrait
{
    /**
     * @param ListDetectorsRequest $args
     * @return ListDetectorsResponse
     */
    public function listDetectors(ListDetectorsRequest $args)
    {
        $result = parent::listDetectors($args->toArray());
        return new ListDetectorsResponse($result->toArray());
    }
}
