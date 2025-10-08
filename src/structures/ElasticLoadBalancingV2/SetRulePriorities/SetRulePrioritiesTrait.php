<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetRulePriorities;

trait SetRulePrioritiesTrait
{
    /**
     * @param SetRulePrioritiesRequest $args
     * @return SetRulePrioritiesResponse
     */
    public function setRulePriorities(SetRulePrioritiesRequest $args)
    {
        $result = parent::setRulePriorities($args->toArray());
        return new SetRulePrioritiesResponse($result->toArray());
    }
}
