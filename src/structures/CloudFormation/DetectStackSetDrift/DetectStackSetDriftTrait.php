<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DetectStackSetDrift;

trait DetectStackSetDriftTrait
{
    /**
     * @param DetectStackSetDriftRequest $args
     * @return DetectStackSetDriftResponse
     */
    public function detectStackSetDrift(DetectStackSetDriftRequest $args)
    {
        $result = parent::detectStackSetDrift($args->toArray());
        return new DetectStackSetDriftResponse($result->toArray());
    }
}
