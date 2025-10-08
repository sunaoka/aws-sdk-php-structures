<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessPoint;

trait CreateAccessPointTrait
{
    /**
     * @param CreateAccessPointRequest $args
     * @return CreateAccessPointResponse
     */
    public function createAccessPoint(CreateAccessPointRequest $args)
    {
        $result = parent::createAccessPoint($args->toArray());
        return new CreateAccessPointResponse($result->toArray());
    }
}
