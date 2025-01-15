<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetFreeTierUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Expression|null $filter
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class GetFreeTierUsageRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\Expression|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
