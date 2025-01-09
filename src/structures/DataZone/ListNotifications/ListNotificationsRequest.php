<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $afterTimestamp
 * @property \Aws\Api\DateTimeResult $beforeTimestamp
 * @property string $domainIdentifier
 * @property int $maxResults
 * @property string $nextToken
 * @property list<string> $subjects
 * @property 'ACTIVE'|'INACTIVE' $taskStatus
 * @property 'TASK'|'EVENT' $type
 */
class ListNotificationsRequest extends Request
{
    /**
     * @param array{
     *     afterTimestamp?: \Aws\Api\DateTimeResult,
     *     beforeTimestamp?: \Aws\Api\DateTimeResult,
     *     domainIdentifier: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     subjects?: list<string>,
     *     taskStatus?: 'ACTIVE'|'INACTIVE',
     *     type: 'TASK'|'EVENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
