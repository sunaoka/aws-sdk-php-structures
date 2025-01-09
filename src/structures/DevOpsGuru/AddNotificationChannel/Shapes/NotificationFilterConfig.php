<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\AddNotificationChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'LOW'|'MEDIUM'|'HIGH'> $Severities
 * @property list<'NEW_INSIGHT'|'CLOSED_INSIGHT'|'NEW_ASSOCIATION'|'SEVERITY_UPGRADED'|'NEW_RECOMMENDATION'> $MessageTypes
 */
class NotificationFilterConfig extends Shape
{
    /**
     * @param array{
     *     Severities?: list<'LOW'|'MEDIUM'|'HIGH'>,
     *     MessageTypes?: list<'NEW_INSIGHT'|'CLOSED_INSIGHT'|'NEW_ASSOCIATION'|'SEVERITY_UPGRADED'|'NEW_RECOMMENDATION'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
