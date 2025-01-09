<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EnabledControlFilter $filter
 * @property int $maxResults
 * @property string $nextToken
 * @property string $targetIdentifier
 */
class ListEnabledControlsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\EnabledControlFilter,
     *     maxResults?: int,
     *     nextToken?: string,
     *     targetIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
