<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EnabledBaselineFilter $filter
 * @property bool $includeChildren
 * @property int<5, 100> $maxResults
 * @property string $nextToken
 */
class ListEnabledBaselinesRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\EnabledBaselineFilter,
     *     includeChildren?: bool,
     *     maxResults?: int<5, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
