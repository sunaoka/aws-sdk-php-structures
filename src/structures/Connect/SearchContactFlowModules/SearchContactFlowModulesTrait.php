<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlowModules;

trait SearchContactFlowModulesTrait
{
    /**
     * @param SearchContactFlowModulesRequest $args
     * @return SearchContactFlowModulesResponse
     */
    public function searchContactFlowModules(SearchContactFlowModulesRequest $args)
    {
        $result = parent::searchContactFlowModules($args->toArray());
        return new SearchContactFlowModulesResponse($result->toArray());
    }
}
