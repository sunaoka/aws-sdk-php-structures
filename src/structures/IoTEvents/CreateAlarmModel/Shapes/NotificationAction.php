<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NotificationTargetActions $action
 * @property list<SMSConfiguration> $smsConfigurations
 * @property list<EmailConfiguration> $emailConfigurations
 */
class NotificationAction extends Shape
{
    /**
     * @param array{
     *     action: NotificationTargetActions,
     *     smsConfigurations?: list<SMSConfiguration>,
     *     emailConfigurations?: list<EmailConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
