<?php

namespace Sunaoka\Aws\Structures\Ssm\ResumeSession;

trait ResumeSessionTrait
{
    /**
     * @param ResumeSessionRequest $args
     * @return ResumeSessionResponse
     */
    public function resumeSession(ResumeSessionRequest $args)
    {
        $result = parent::resumeSession($args->toArray());
        return new ResumeSessionResponse($result->toArray());
    }
}
