<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingTargets;

trait GetSamplingTargetsTrait
{
    /**
     * @param GetSamplingTargetsRequest $args
     * @return GetSamplingTargetsResponse
     */
    public function getSamplingTargets(GetSamplingTargetsRequest $args)
    {
        $result = parent::getSamplingTargets($args->toArray());
        return new GetSamplingTargetsResponse($result->toArray());
    }
}
