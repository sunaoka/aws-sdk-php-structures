<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteStreamingDistribution;

trait DeleteStreamingDistributionTrait
{
    /**
     * @param DeleteStreamingDistributionRequest $args
     * @return void
     */
    public function deleteStreamingDistribution(DeleteStreamingDistributionRequest $args)
    {
        parent::deleteStreamingDistribution($args->toArray());
    }
}
