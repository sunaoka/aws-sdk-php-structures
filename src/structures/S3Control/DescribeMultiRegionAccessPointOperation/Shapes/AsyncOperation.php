<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'CreateMultiRegionAccessPoint'|'DeleteMultiRegionAccessPoint'|'PutMultiRegionAccessPointPolicy' $Operation
 * @property string $RequestTokenARN
 * @property AsyncRequestParameters $RequestParameters
 * @property string $RequestStatus
 * @property AsyncResponseDetails $ResponseDetails
 */
class AsyncOperation extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Operation?: 'CreateMultiRegionAccessPoint'|'DeleteMultiRegionAccessPoint'|'PutMultiRegionAccessPointPolicy',
     *     RequestTokenARN?: string,
     *     RequestParameters?: AsyncRequestParameters,
     *     RequestStatus?: string,
     *     ResponseDetails?: AsyncResponseDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
