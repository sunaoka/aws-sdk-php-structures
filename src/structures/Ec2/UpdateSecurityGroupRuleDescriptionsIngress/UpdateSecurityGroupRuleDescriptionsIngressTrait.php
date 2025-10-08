<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateSecurityGroupRuleDescriptionsIngress;

trait UpdateSecurityGroupRuleDescriptionsIngressTrait
{
    /**
     * @param UpdateSecurityGroupRuleDescriptionsIngressRequest $args
     * @return UpdateSecurityGroupRuleDescriptionsIngressResponse
     */
    public function updateSecurityGroupRuleDescriptionsIngress(UpdateSecurityGroupRuleDescriptionsIngressRequest $args)
    {
        $result = parent::updateSecurityGroupRuleDescriptionsIngress($args->toArray());
        return new UpdateSecurityGroupRuleDescriptionsIngressResponse($result->toArray());
    }
}
