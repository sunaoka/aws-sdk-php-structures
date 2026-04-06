<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EnabledBaselineFilter|null $filter
 * @property string|null $nextToken
 * @property int<5, 100>|null $maxResults
 * @property bool|null $includeChildren
 */
class ListEnabledBaselinesRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\EnabledBaselineFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int<5, 100>|null,
     *     includeChildren?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
