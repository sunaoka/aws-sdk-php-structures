<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetFreeTierUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Expression $filter
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class GetFreeTierUsageRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\Expression,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
