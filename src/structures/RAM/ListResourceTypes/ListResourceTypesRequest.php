<?php

namespace Sunaoka\Aws\Structures\RAM\ListResourceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 * @property 'ALL'|'REGIONAL'|'GLOBAL'|null $resourceRegionScope
 */
class ListResourceTypesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null,
     *     resourceRegionScope?: 'ALL'|'REGIONAL'|'GLOBAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
