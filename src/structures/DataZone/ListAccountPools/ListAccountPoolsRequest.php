<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAccountPools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $name
 * @property string|null $nextToken
 * @property 'NAME'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 */
class ListAccountPoolsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     name?: string|null,
     *     nextToken?: string|null,
     *     sortBy?: 'NAME'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
