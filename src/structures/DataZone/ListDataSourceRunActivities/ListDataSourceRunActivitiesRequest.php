<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRunActivities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property 'FAILED'|'PUBLISHING_FAILED'|'SUCCEEDED_CREATED'|'SUCCEEDED_UPDATED'|'SKIPPED_ALREADY_IMPORTED'|'SKIPPED_ARCHIVED'|'SKIPPED_NO_ACCESS'|'UNCHANGED'|null $status
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListDataSourceRunActivitiesRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     status?: 'FAILED'|'PUBLISHING_FAILED'|'SUCCEEDED_CREATED'|'SUCCEEDED_UPDATED'|'SKIPPED_ALREADY_IMPORTED'|'SKIPPED_ARCHIVED'|'SKIPPED_NO_ACCESS'|'UNCHANGED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
