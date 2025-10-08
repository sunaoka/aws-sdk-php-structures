<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowVersions;

trait ListContactFlowVersionsTrait
{
    /**
     * @param ListContactFlowVersionsRequest $args
     * @return ListContactFlowVersionsResponse
     */
    public function listContactFlowVersions(ListContactFlowVersionsRequest $args)
    {
        $result = parent::listContactFlowVersions($args->toArray());
        return new ListContactFlowVersionsResponse($result->toArray());
    }
}
