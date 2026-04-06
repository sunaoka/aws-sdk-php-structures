<?php

namespace Sunaoka\Aws\Structures\FSx\CreateAndAttachS3AccessPoint;

trait CreateAndAttachS3AccessPointTrait
{
    /**
     * @param CreateAndAttachS3AccessPointRequest $args
     * @return CreateAndAttachS3AccessPointResponse
     */
    public function createAndAttachS3AccessPoint(CreateAndAttachS3AccessPointRequest $args)
    {
        $result = parent::createAndAttachS3AccessPoint($args->toArray());
        return new CreateAndAttachS3AccessPointResponse($result->toArray());
    }
}
