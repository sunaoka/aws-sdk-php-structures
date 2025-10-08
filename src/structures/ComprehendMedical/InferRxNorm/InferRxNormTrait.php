<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferRxNorm;

trait InferRxNormTrait
{
    /**
     * @param InferRxNormRequest $args
     * @return InferRxNormResponse
     */
    public function inferRxNorm(InferRxNormRequest $args)
    {
        $result = parent::inferRxNorm($args->toArray());
        return new InferRxNormResponse($result->toArray());
    }
}
