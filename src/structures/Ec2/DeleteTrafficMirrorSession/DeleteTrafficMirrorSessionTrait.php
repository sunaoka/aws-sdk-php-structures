<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTrafficMirrorSession;

trait DeleteTrafficMirrorSessionTrait
{
    /**
     * @param DeleteTrafficMirrorSessionRequest $args
     * @return DeleteTrafficMirrorSessionResponse
     */
    public function deleteTrafficMirrorSession(DeleteTrafficMirrorSessionRequest $args)
    {
        $result = parent::deleteTrafficMirrorSession($args->toArray());
        return new DeleteTrafficMirrorSessionResponse($result->toArray());
    }
}
