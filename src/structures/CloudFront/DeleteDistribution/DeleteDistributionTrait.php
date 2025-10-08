<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteDistribution;

trait DeleteDistributionTrait
{
    /**
     * @param DeleteDistributionRequest $args
     * @return void
     */
    public function deleteDistribution(DeleteDistributionRequest $args)
    {
        parent::deleteDistribution($args->toArray());
    }
}
