<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TargetQueryTCU
 * @property AccountSettingsNotificationConfiguration $NotificationConfiguration
 */
class ProvisionedCapacityRequest extends Shape
{
    /**
     * @param array{
     *     TargetQueryTCU: int,
     *     NotificationConfiguration?: AccountSettingsNotificationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
