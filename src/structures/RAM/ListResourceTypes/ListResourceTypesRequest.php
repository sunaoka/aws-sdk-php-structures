<?php

namespace Sunaoka\Aws\Structures\RAM\ListResourceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property 'ALL'|'REGIONAL'|'GLOBAL' $resourceRegionScope
 */
class ListResourceTypesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     resourceRegionScope?: 'ALL'|'REGIONAL'|'GLOBAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
