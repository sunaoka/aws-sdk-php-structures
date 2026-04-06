<?php

namespace Sunaoka\Aws\Structures\Ec2\GetImageBlockPublicAccessState;

trait GetImageBlockPublicAccessStateTrait
{
    /**
     * @param GetImageBlockPublicAccessStateRequest $args
     * @return GetImageBlockPublicAccessStateResponse
     */
    public function getImageBlockPublicAccessState(GetImageBlockPublicAccessStateRequest $args)
    {
        $result = parent::getImageBlockPublicAccessState($args->toArray());
        return new GetImageBlockPublicAccessStateResponse($result->toArray());
    }
}
