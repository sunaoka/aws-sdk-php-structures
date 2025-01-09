<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property 'ACTIVE'|'PARTIALLY_ACTIVE'|'INACTIVE'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'LONG'|'SHORT'|'NONE' $aggregationDuration
 */
class NotificationConfigurationStructure extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     description: string,
     *     status: 'ACTIVE'|'PARTIALLY_ACTIVE'|'INACTIVE'|'DELETING',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     aggregationDuration?: 'LONG'|'SHORT'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
