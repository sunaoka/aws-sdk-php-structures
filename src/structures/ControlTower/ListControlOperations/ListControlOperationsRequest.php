<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListControlOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ControlOperationFilter|null $filter
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListControlOperationsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\ControlOperationFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
