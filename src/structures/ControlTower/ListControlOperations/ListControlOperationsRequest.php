<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListControlOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ControlOperationFilter $filter
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListControlOperationsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\ControlOperationFilter,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
