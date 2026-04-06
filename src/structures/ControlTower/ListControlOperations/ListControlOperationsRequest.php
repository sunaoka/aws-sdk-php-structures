<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListControlOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ControlOperationFilter|null $filter
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListControlOperationsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\ControlOperationFilter|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
