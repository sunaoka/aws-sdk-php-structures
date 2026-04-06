<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property 'TASK'|'EVENT' $type
 * @property \Aws\Api\DateTimeResult|null $afterTimestamp
 * @property \Aws\Api\DateTimeResult|null $beforeTimestamp
 * @property list<string>|null $subjects
 * @property 'ACTIVE'|'INACTIVE'|null $taskStatus
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListNotificationsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     type: 'TASK'|'EVENT',
     *     afterTimestamp?: \Aws\Api\DateTimeResult|null,
     *     beforeTimestamp?: \Aws\Api\DateTimeResult|null,
     *     subjects?: list<string>|null,
     *     taskStatus?: 'ACTIVE'|'INACTIVE'|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
