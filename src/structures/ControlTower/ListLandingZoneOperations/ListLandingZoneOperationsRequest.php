<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListLandingZoneOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LandingZoneOperationFilter|null $filter
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListLandingZoneOperationsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\LandingZoneOperationFilter|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
