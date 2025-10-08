<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInsightsPath;

trait DeleteNetworkInsightsPathTrait
{
    /**
     * @param DeleteNetworkInsightsPathRequest $args
     * @return DeleteNetworkInsightsPathResponse
     */
    public function deleteNetworkInsightsPath(DeleteNetworkInsightsPathRequest $args)
    {
        $result = parent::deleteNetworkInsightsPath($args->toArray());
        return new DeleteNetworkInsightsPathResponse($result->toArray());
    }
}
