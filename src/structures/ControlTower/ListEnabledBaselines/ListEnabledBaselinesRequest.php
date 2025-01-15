<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EnabledBaselineFilter|null $filter
 * @property bool|null $includeChildren
 * @property int<5, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListEnabledBaselinesRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\EnabledBaselineFilter|null,
     *     includeChildren?: bool|null,
     *     maxResults?: int<5, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
