<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'fleetIdDoesNotExist'|'fleetIdMalformed'|'fleetNotInDeletableState'|'unexpectedError' $Code
 * @property string $Message
 */
class DeleteFleetError extends Shape
{
    /**
     * @param array{
     *     Code?: 'fleetIdDoesNotExist'|'fleetIdMalformed'|'fleetNotInDeletableState'|'unexpectedError',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
