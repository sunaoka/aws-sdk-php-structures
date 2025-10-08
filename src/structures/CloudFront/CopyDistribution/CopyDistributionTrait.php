<?php

namespace Sunaoka\Aws\Structures\CloudFront\CopyDistribution;

trait CopyDistributionTrait
{
    /**
     * @param CopyDistributionRequest $args
     * @return CopyDistributionResponse
     */
    public function copyDistribution(CopyDistributionRequest $args)
    {
        $result = parent::copyDistribution($args->toArray());
        return new CopyDistributionResponse($result->toArray());
    }
}
