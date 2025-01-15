<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'fleetIdDoesNotExist'|'fleetIdMalformed'|'fleetNotInDeletableState'|'unexpectedError'|null $Code
 * @property string|null $Message
 */
class DeleteFleetError extends Shape
{
    /**
     * @param array{
     *     Code?: 'fleetIdDoesNotExist'|'fleetIdMalformed'|'fleetNotInDeletableState'|'unexpectedError'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
