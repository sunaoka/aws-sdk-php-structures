<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeTimeSeries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $alias
 * @property string $assetId
 * @property string $propertyId
 */
class DescribeTimeSeriesRequest extends Request
{
    /**
     * @param array{
     *     alias?: string,
     *     assetId?: string,
     *     propertyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
