<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\PostAgentProfile;

trait PostAgentProfileTrait
{
    /**
     * @param PostAgentProfileRequest $args
     * @return PostAgentProfileResponse
     */
    public function postAgentProfile(PostAgentProfileRequest $args)
    {
        $result = parent::postAgentProfile($args->toArray());
        return new PostAgentProfileResponse($result->toArray());
    }
}
