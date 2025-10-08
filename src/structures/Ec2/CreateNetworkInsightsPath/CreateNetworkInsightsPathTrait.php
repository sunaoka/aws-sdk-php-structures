<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsPath;

trait CreateNetworkInsightsPathTrait
{
    /**
     * @param CreateNetworkInsightsPathRequest $args
     * @return CreateNetworkInsightsPathResponse
     */
    public function createNetworkInsightsPath(CreateNetworkInsightsPathRequest $args)
    {
        $result = parent::createNetworkInsightsPath($args->toArray());
        return new CreateNetworkInsightsPathResponse($result->toArray());
    }
}
