<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 * @property 'CREATED_AT'|'UPDATED_AT' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 */
class ListSubscriptionTargetsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string,
     *     sortBy?: 'CREATED_AT'|'UPDATED_AT',
     *     sortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
