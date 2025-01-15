<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListBaselines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<4, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListBaselinesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<4, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
