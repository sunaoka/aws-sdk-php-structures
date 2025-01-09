<?php

namespace Sunaoka\Aws\Structures\Ssm\ResetServiceSetting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SettingId
 * @property string $SettingValue
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $LastModifiedUser
 * @property string $ARN
 * @property string $Status
 */
class ServiceSetting extends Shape
{
    /**
     * @param array{
     *     SettingId?: string,
     *     SettingValue?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedUser?: string,
     *     ARN?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
