<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateMobileDeviceAccessRule;

trait CreateMobileDeviceAccessRuleTrait
{
    /**
     * @param CreateMobileDeviceAccessRuleRequest $args
     * @return CreateMobileDeviceAccessRuleResponse
     */
    public function createMobileDeviceAccessRule(CreateMobileDeviceAccessRuleRequest $args)
    {
        $result = parent::createMobileDeviceAccessRule($args->toArray());
        return new CreateMobileDeviceAccessRuleResponse($result->toArray());
    }
}
