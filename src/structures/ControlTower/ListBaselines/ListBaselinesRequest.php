<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListBaselines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<4, 100>|null $maxResults
 */
class ListBaselinesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<4, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
