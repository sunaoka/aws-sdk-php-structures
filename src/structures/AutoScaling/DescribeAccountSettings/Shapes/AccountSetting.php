<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Value
 * @property string|null $EnforcementType
 * @property \Aws\Api\DateTimeResult|null $EnforcementDate
 * @property string|null $DefaultValue
 * @property string|null $EnforcedValue
 */
class AccountSetting extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Value?: string|null,
     *     EnforcementType?: string|null,
     *     EnforcementDate?: \Aws\Api\DateTimeResult|null,
     *     DefaultValue?: string|null,
     *     EnforcedValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
