<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeInterconnects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $interconnectId
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeInterconnectsRequest extends Request
{
    /**
     * @param array{
     *     interconnectId?: string|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
