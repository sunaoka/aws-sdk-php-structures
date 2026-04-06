<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionLink
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property string $domainIdentifier
 * @property string $identifier
 * @property \Aws\Api\DateTimeResult $lastUpdatedTimestamp
 * @property string $message
 * @property array<string, string>|null $metadata
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property string $title
 * @property Topic $topic
 * @property 'TASK'|'EVENT' $type
 */
class NotificationOutput extends Shape
{
    /**
     * @param array{
     *     actionLink: string,
     *     creationTimestamp: \Aws\Api\DateTimeResult,
     *     domainIdentifier: string,
     *     identifier: string,
     *     lastUpdatedTimestamp: \Aws\Api\DateTimeResult,
     *     message: string,
     *     metadata?: array<string, string>|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     title: string,
     *     topic: Topic,
     *     type: 'TASK'|'EVENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
