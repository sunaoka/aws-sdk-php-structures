<?php

namespace Sunaoka\Aws\Structures\Ssm\ResetServiceSetting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SettingId
 * @property string|null $SettingValue
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $LastModifiedUser
 * @property string|null $ARN
 * @property string|null $Status
 */
class ServiceSetting extends Shape
{
    /**
     * @param array{
     *     SettingId?: string|null,
     *     SettingValue?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedUser?: string|null,
     *     ARN?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
