<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string $domainIdentifier
 * @property 'TASK'|'EVENT' $type
 * @property Topic $topic
 * @property string $title
 * @property string $message
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property string $actionLink
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property \Aws\Api\DateTimeResult $lastUpdatedTimestamp
 * @property array<string, string>|null $metadata
 */
class NotificationOutput extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     domainIdentifier: string,
     *     type: 'TASK'|'EVENT',
     *     topic: Topic,
     *     title: string,
     *     message: string,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     actionLink: string,
     *     creationTimestamp: \Aws\Api\DateTimeResult,
     *     lastUpdatedTimestamp: \Aws\Api\DateTimeResult,
     *     metadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
