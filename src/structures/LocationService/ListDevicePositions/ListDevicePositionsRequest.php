<?php

namespace Sunaoka\Aws\Structures\LocationService\ListDevicePositions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property int $MaxResults
 * @property string $NextToken
 * @property Shapes\TrackingFilterGeometry $FilterGeometry
 */
class ListDevicePositionsRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     FilterGeometry?: Shapes\TrackingFilterGeometry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
