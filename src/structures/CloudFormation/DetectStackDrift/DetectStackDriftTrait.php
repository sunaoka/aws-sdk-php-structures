<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DetectStackDrift;

trait DetectStackDriftTrait
{
    /**
     * @param DetectStackDriftRequest $args
     * @return DetectStackDriftResponse
     */
    public function detectStackDrift(DetectStackDriftRequest $args)
    {
        $result = parent::detectStackDrift($args->toArray());
        return new DetectStackDriftResponse($result->toArray());
    }
}
