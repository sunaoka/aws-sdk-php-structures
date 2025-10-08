<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributions;

trait ListDistributionsTrait
{
    /**
     * @param ListDistributionsRequest $args
     * @return ListDistributionsResponse
     */
    public function listDistributions(ListDistributionsRequest $args)
    {
        $result = parent::listDistributions($args->toArray());
        return new ListDistributionsResponse($result->toArray());
    }
}
