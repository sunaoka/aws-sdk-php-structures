<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateMobileDeviceAccessRule;

trait UpdateMobileDeviceAccessRuleTrait
{
    /**
     * @param UpdateMobileDeviceAccessRuleRequest $args
     * @return UpdateMobileDeviceAccessRuleResponse
     */
    public function updateMobileDeviceAccessRule(UpdateMobileDeviceAccessRuleRequest $args)
    {
        $result = parent::updateMobileDeviceAccessRule($args->toArray());
        return new UpdateMobileDeviceAccessRuleResponse($result->toArray());
    }
}
