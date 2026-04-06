<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EnabledControlFilter|null $filter
 * @property int<1, 200>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $targetIdentifier
 */
class ListEnabledControlsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\EnabledControlFilter|null,
     *     maxResults?: int<1, 200>|null,
     *     nextToken?: string|null,
     *     targetIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
