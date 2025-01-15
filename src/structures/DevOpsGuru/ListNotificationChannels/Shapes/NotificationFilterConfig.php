<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListNotificationChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'LOW'|'MEDIUM'|'HIGH'>|null $Severities
 * @property list<'NEW_INSIGHT'|'CLOSED_INSIGHT'|'NEW_ASSOCIATION'|'SEVERITY_UPGRADED'|'NEW_RECOMMENDATION'>|null $MessageTypes
 */
class NotificationFilterConfig extends Shape
{
    /**
     * @param array{
     *     Severities?: list<'LOW'|'MEDIUM'|'HIGH'>|null,
     *     MessageTypes?: list<'NEW_INSIGHT'|'CLOSED_INSIGHT'|'NEW_ASSOCIATION'|'SEVERITY_UPGRADED'|'NEW_RECOMMENDATION'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
