<?php

namespace Sunaoka\Aws\Structures\S3Files\GetAccessPoint;

trait GetAccessPointTrait
{
    /**
     * @param GetAccessPointRequest $args
     * @return GetAccessPointResponse
     */
    public function getAccessPoint(GetAccessPointRequest $args)
    {
        $result = parent::getAccessPoint($args->toArray());
        return new GetAccessPointResponse($result->toArray());
    }
}
