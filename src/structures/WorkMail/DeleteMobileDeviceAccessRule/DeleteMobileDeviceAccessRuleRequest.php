<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteMobileDeviceAccessRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $MobileDeviceAccessRuleId
 */
class DeleteMobileDeviceAccessRuleRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     MobileDeviceAccessRuleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
