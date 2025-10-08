<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateSecurityGroupRuleDescriptionsEgress;

trait UpdateSecurityGroupRuleDescriptionsEgressTrait
{
    /**
     * @param UpdateSecurityGroupRuleDescriptionsEgressRequest $args
     * @return UpdateSecurityGroupRuleDescriptionsEgressResponse
     */
    public function updateSecurityGroupRuleDescriptionsEgress(UpdateSecurityGroupRuleDescriptionsEgressRequest $args)
    {
        $result = parent::updateSecurityGroupRuleDescriptionsEgress($args->toArray());
        return new UpdateSecurityGroupRuleDescriptionsEgressResponse($result->toArray());
    }
}
