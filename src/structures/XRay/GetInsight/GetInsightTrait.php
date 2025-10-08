<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsight;

trait GetInsightTrait
{
    /**
     * @param GetInsightRequest $args
     * @return GetInsightResponse
     */
    public function getInsight(GetInsightRequest $args)
    {
        $result = parent::getInsight($args->toArray());
        return new GetInsightResponse($result->toArray());
    }
}
