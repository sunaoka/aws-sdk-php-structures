<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTrafficMirrorTarget;

trait DeleteTrafficMirrorTargetTrait
{
    /**
     * @param DeleteTrafficMirrorTargetRequest $args
     * @return DeleteTrafficMirrorTargetResponse
     */
    public function deleteTrafficMirrorTarget(DeleteTrafficMirrorTargetRequest $args)
    {
        $result = parent::deleteTrafficMirrorTarget($args->toArray());
        return new DeleteTrafficMirrorTargetResponse($result->toArray());
    }
}
