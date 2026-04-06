<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $targetIdentifier
 * @property string|null $nextToken
 * @property int<1, 200>|null $maxResults
 * @property Shapes\EnabledControlFilter|null $filter
 * @property bool|null $includeChildren
 */
class ListEnabledControlsRequest extends Request
{
    /**
     * @param array{
     *     targetIdentifier?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 200>|null,
     *     filter?: Shapes\EnabledControlFilter|null,
     *     includeChildren?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
