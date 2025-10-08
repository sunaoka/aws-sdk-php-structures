<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListDetectorModelVersions;

trait ListDetectorModelVersionsTrait
{
    /**
     * @param ListDetectorModelVersionsRequest $args
     * @return ListDetectorModelVersionsResponse
     */
    public function listDetectorModelVersions(ListDetectorModelVersionsRequest $args)
    {
        $result = parent::listDetectorModelVersions($args->toArray());
        return new ListDetectorModelVersionsResponse($result->toArray());
    }
}
