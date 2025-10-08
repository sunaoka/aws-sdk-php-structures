<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DetectStackResourceDrift;

trait DetectStackResourceDriftTrait
{
    /**
     * @param DetectStackResourceDriftRequest $args
     * @return DetectStackResourceDriftResponse
     */
    public function detectStackResourceDrift(DetectStackResourceDriftRequest $args)
    {
        $result = parent::detectStackResourceDrift($args->toArray());
        return new DetectStackResourceDriftResponse($result->toArray());
    }
}
