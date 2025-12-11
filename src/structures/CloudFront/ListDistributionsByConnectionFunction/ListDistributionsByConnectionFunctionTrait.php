<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByConnectionFunction;

trait ListDistributionsByConnectionFunctionTrait
{
    /**
     * @param ListDistributionsByConnectionFunctionRequest $args
     * @return ListDistributionsByConnectionFunctionResponse
     */
    public function listDistributionsByConnectionFunction(ListDistributionsByConnectionFunctionRequest $args)
    {
        $result = parent::listDistributionsByConnectionFunction($args->toArray());
        return new ListDistributionsByConnectionFunctionResponse($result->toArray());
    }
}
