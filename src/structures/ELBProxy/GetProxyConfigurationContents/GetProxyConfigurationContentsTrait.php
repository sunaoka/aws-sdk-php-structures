<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxyConfigurationContents;

trait GetProxyConfigurationContentsTrait
{
    /**
     * @param GetProxyConfigurationContentsRequest $args
     * @return GetProxyConfigurationContentsResponse
     */
    public function getProxyConfigurationContents(GetProxyConfigurationContentsRequest $args)
    {
        $result = parent::getProxyConfigurationContents($args->toArray());
        return new GetProxyConfigurationContentsResponse($result->toArray());
    }
}
