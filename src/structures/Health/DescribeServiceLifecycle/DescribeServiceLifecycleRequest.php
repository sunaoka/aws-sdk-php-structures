<?php

namespace Sunaoka\Aws\Structures\Health\DescribeServiceLifecycle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ServiceLifecycleFilter|null $filter
 * @property string|null $nextToken
 * @property int<1, 20>|null $maxResults
 */
class DescribeServiceLifecycleRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\ServiceLifecycleFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
