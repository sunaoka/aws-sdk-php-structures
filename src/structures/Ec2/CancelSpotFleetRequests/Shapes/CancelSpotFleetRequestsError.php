<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'fleetRequestIdDoesNotExist'|'fleetRequestIdMalformed'|'fleetRequestNotInCancellableState'|'unexpectedError'|null $Code
 * @property string|null $Message
 */
class CancelSpotFleetRequestsError extends Shape
{
    /**
     * @param array{
     *     Code?: 'fleetRequestIdDoesNotExist'|'fleetRequestIdMalformed'|'fleetRequestNotInCancellableState'|'unexpectedError'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
