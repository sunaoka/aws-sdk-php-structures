<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactFlowModuleVersions;

trait ListContactFlowModuleVersionsTrait
{
    /**
     * @param ListContactFlowModuleVersionsRequest $args
     * @return ListContactFlowModuleVersionsResponse
     */
    public function listContactFlowModuleVersions(ListContactFlowModuleVersionsRequest $args)
    {
        $result = parent::listContactFlowModuleVersions($args->toArray());
        return new ListContactFlowModuleVersionsResponse($result->toArray());
    }
}
