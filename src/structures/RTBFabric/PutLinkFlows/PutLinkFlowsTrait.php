<?php

namespace Sunaoka\Aws\Structures\RTBFabric\PutLinkFlows;

trait PutLinkFlowsTrait
{
    /**
     * @param PutLinkFlowsRequest $args
     * @return PutLinkFlowsResponse
     */
    public function putLinkFlows(PutLinkFlowsRequest $args)
    {
        $result = parent::putLinkFlows($args->toArray());
        return new PutLinkFlowsResponse($result->toArray());
    }
}
