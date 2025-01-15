<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NotificationTargetActions $action
 * @property list<SMSConfiguration>|null $smsConfigurations
 * @property list<EmailConfiguration>|null $emailConfigurations
 */
class NotificationAction extends Shape
{
    /**
     * @param array{
     *     action: NotificationTargetActions,
     *     smsConfigurations?: list<SMSConfiguration>|null,
     *     emailConfigurations?: list<EmailConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
