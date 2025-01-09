<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZoneOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LandingZoneOperationFilter $filter
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListLandingZoneOperationsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\LandingZoneOperationFilter,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
