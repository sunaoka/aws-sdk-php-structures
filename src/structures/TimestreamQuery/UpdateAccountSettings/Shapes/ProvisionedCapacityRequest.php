<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TargetQueryTCU
 * @property AccountSettingsNotificationConfiguration|null $NotificationConfiguration
 */
class ProvisionedCapacityRequest extends Shape
{
    /**
     * @param array{
     *     TargetQueryTCU: int,
     *     NotificationConfiguration?: AccountSettingsNotificationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
