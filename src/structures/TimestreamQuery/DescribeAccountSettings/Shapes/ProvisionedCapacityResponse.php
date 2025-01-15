<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ActiveQueryTCU
 * @property AccountSettingsNotificationConfiguration|null $NotificationConfiguration
 * @property LastUpdate|null $LastUpdate
 */
class ProvisionedCapacityResponse extends Shape
{
    /**
     * @param array{
     *     ActiveQueryTCU?: int|null,
     *     NotificationConfiguration?: AccountSettingsNotificationConfiguration|null,
     *     LastUpdate?: LastUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
