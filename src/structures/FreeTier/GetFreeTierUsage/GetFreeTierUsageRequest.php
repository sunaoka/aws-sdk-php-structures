<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetFreeTierUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Expression $filter
 * @property int $maxResults
 * @property string $nextToken
 */
class GetFreeTierUsageRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\Expression,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
