<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeMultiRegionAccessPointOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'CreateMultiRegionAccessPoint'|'DeleteMultiRegionAccessPoint'|'PutMultiRegionAccessPointPolicy'|null $Operation
 * @property string|null $RequestTokenARN
 * @property AsyncRequestParameters|null $RequestParameters
 * @property string|null $RequestStatus
 * @property AsyncResponseDetails|null $ResponseDetails
 */
class AsyncOperation extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Operation?: 'CreateMultiRegionAccessPoint'|'DeleteMultiRegionAccessPoint'|'PutMultiRegionAccessPointPolicy'|null,
     *     RequestTokenARN?: string|null,
     *     RequestParameters?: AsyncRequestParameters|null,
     *     RequestStatus?: string|null,
     *     ResponseDetails?: AsyncResponseDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
