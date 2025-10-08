<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorSession;

trait CreateTrafficMirrorSessionTrait
{
    /**
     * @param CreateTrafficMirrorSessionRequest $args
     * @return CreateTrafficMirrorSessionResponse
     */
    public function createTrafficMirrorSession(CreateTrafficMirrorSessionRequest $args)
    {
        $result = parent::createTrafficMirrorSession($args->toArray());
        return new CreateTrafficMirrorSessionResponse($result->toArray());
    }
}
