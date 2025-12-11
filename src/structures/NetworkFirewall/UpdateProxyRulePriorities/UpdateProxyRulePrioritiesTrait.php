<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyRulePriorities;

trait UpdateProxyRulePrioritiesTrait
{
    /**
     * @param UpdateProxyRulePrioritiesRequest $args
     * @return UpdateProxyRulePrioritiesResponse
     */
    public function updateProxyRulePriorities(UpdateProxyRulePrioritiesRequest $args)
    {
        $result = parent::updateProxyRulePriorities($args->toArray());
        return new UpdateProxyRulePrioritiesResponse($result->toArray());
    }
}
