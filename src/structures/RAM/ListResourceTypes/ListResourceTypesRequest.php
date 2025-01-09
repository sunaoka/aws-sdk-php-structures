<?php

namespace Sunaoka\Aws\Structures\RAM\ListResourceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 500> $maxResults
 * @property 'ALL'|'REGIONAL'|'GLOBAL' $resourceRegionScope
 */
class ListResourceTypesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 500>,
     *     resourceRegionScope?: 'ALL'|'REGIONAL'|'GLOBAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
