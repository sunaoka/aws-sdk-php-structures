<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CancelSpotFleetRequestsError $Error
 * @property string $SpotFleetRequestId
 */
class CancelSpotFleetRequestsErrorItem extends Shape
{
    /**
     * @param array{
     *     Error?: CancelSpotFleetRequestsError,
     *     SpotFleetRequestId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
