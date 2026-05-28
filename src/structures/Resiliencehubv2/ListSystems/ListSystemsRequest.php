<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ouId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListSystemsRequest extends Request
{
    /**
     * @param array{
     *     ouId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
