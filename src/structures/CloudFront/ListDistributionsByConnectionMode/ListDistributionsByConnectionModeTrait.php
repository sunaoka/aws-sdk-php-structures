<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByConnectionMode;

trait ListDistributionsByConnectionModeTrait
{
    /**
     * @param ListDistributionsByConnectionModeRequest $args
     * @return ListDistributionsByConnectionModeResponse
     */
    public function listDistributionsByConnectionMode(ListDistributionsByConnectionModeRequest $args)
    {
        $result = parent::listDistributionsByConnectionMode($args->toArray());
        return new ListDistributionsByConnectionModeResponse($result->toArray());
    }
}
