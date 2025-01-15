<?php

namespace Sunaoka\Aws\Structures\LocationService\ListDevicePositions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\TrackingFilterGeometry|null $FilterGeometry
 */
class ListDevicePositionsRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     FilterGeometry?: Shapes\TrackingFilterGeometry|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
