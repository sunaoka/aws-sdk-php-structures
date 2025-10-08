<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMobileDeviceAccessRules;

trait ListMobileDeviceAccessRulesTrait
{
    /**
     * @param ListMobileDeviceAccessRulesRequest $args
     * @return ListMobileDeviceAccessRulesResponse
     */
    public function listMobileDeviceAccessRules(ListMobileDeviceAccessRulesRequest $args)
    {
        $result = parent::listMobileDeviceAccessRules($args->toArray());
        return new ListMobileDeviceAccessRulesResponse($result->toArray());
    }
}
