<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMobileDeviceAccessEffect\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MobileDeviceAccessRuleId
 * @property string|null $Name
 */
class MobileDeviceAccessMatchedRule extends Shape
{
    /**
     * @param array{
     *     MobileDeviceAccessRuleId?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
