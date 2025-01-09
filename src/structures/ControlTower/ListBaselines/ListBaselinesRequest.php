<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListBaselines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<4, 100> $maxResults
 * @property string $nextToken
 */
class ListBaselinesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<4, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
