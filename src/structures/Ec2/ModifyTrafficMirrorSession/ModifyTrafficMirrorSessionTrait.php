<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTrafficMirrorSession;

trait ModifyTrafficMirrorSessionTrait
{
    /**
     * @param ModifyTrafficMirrorSessionRequest $args
     * @return ModifyTrafficMirrorSessionResponse
     */
    public function modifyTrafficMirrorSession(ModifyTrafficMirrorSessionRequest $args)
    {
        $result = parent::modifyTrafficMirrorSession($args->toArray());
        return new ModifyTrafficMirrorSessionResponse($result->toArray());
    }
}
