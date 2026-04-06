<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property 'CREATED_AT'|'UPDATED_AT'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListSubscriptionTargetsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     sortBy?: 'CREATED_AT'|'UPDATED_AT'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
