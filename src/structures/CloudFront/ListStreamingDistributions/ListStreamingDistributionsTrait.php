<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListStreamingDistributions;

trait ListStreamingDistributionsTrait
{
    /**
     * @param ListStreamingDistributionsRequest $args
     * @return ListStreamingDistributionsResponse
     */
    public function listStreamingDistributions(ListStreamingDistributionsRequest $args)
    {
        $result = parent::listStreamingDistributions($args->toArray());
        return new ListStreamingDistributionsResponse($result->toArray());
    }
}
