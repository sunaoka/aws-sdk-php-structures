<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'fleetRequestIdDoesNotExist'|'fleetRequestIdMalformed'|'fleetRequestNotInCancellableState'|'unexpectedError' $Code
 * @property string $Message
 */
class CancelSpotFleetRequestsError extends Shape
{
    /**
     * @param array{
     *     Code?: 'fleetRequestIdDoesNotExist'|'fleetRequestIdMalformed'|'fleetRequestNotInCancellableState'|'unexpectedError',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
