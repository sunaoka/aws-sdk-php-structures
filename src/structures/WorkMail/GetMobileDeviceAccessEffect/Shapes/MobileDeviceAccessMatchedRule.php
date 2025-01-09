<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMobileDeviceAccessEffect\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MobileDeviceAccessRuleId
 * @property string $Name
 */
class MobileDeviceAccessMatchedRule extends Shape
{
    /**
     * @param array{
     *     MobileDeviceAccessRuleId?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
