<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CancelSpotFleetRequestsError|null $Error
 * @property string|null $SpotFleetRequestId
 */
class CancelSpotFleetRequestsErrorItem extends Shape
{
    /**
     * @param array{
     *     Error?: CancelSpotFleetRequestsError|null,
     *     SpotFleetRequestId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
