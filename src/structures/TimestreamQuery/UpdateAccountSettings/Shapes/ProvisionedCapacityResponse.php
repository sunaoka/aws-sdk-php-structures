<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ActiveQueryTCU
 * @property AccountSettingsNotificationConfiguration $NotificationConfiguration
 * @property LastUpdate $LastUpdate
 */
class ProvisionedCapacityResponse extends Shape
{
    /**
     * @param array{
     *     ActiveQueryTCU?: int,
     *     NotificationConfiguration?: AccountSettingsNotificationConfiguration,
     *     LastUpdate?: LastUpdate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
