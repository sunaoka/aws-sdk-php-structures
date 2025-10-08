<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteMobileDeviceAccessRule;

trait DeleteMobileDeviceAccessRuleTrait
{
    /**
     * @param DeleteMobileDeviceAccessRuleRequest $args
     * @return DeleteMobileDeviceAccessRuleResponse
     */
    public function deleteMobileDeviceAccessRule(DeleteMobileDeviceAccessRuleRequest $args)
    {
        $result = parent::deleteMobileDeviceAccessRule($args->toArray());
        return new DeleteMobileDeviceAccessRuleResponse($result->toArray());
    }
}
