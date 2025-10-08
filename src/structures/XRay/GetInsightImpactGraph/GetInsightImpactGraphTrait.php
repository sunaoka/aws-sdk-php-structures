<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightImpactGraph;

trait GetInsightImpactGraphTrait
{
    /**
     * @param GetInsightImpactGraphRequest $args
     * @return GetInsightImpactGraphResponse
     */
    public function getInsightImpactGraph(GetInsightImpactGraphRequest $args)
    {
        $result = parent::getInsightImpactGraph($args->toArray());
        return new GetInsightImpactGraphResponse($result->toArray());
    }
}
