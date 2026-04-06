<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $afterTimestamp
 * @property \Aws\Api\DateTimeResult|null $beforeTimestamp
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property list<string>|null $subjects
 * @property 'ACTIVE'|'INACTIVE'|null $taskStatus
 * @property 'TASK'|'EVENT' $type
 */
class ListNotificationsRequest extends Request
{
    /**
     * @param array{
     *     afterTimestamp?: \Aws\Api\DateTimeResult|null,
     *     beforeTimestamp?: \Aws\Api\DateTimeResult|null,
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     subjects?: list<string>|null,
     *     taskStatus?: 'ACTIVE'|'INACTIVE'|null,
     *     type: 'TASK'|'EVENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
