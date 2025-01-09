<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZoneOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LandingZoneOperationFilter $filter
 * @property int $maxResults
 * @property string $nextToken
 */
class ListLandingZoneOperationsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\LandingZoneOperationFilter,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
