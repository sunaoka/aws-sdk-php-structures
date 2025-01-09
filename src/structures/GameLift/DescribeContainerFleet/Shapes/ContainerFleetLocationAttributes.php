<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Location
 * @property 'PENDING'|'CREATING'|'CREATED'|'ACTIVATING'|'ACTIVE'|'UPDATING'|'DELETING' $Status
 */
class ContainerFleetLocationAttributes extends Shape
{
    /**
     * @param array{
     *     Location?: string,
     *     Status?: 'PENDING'|'CREATING'|'CREATED'|'ACTIVATING'|'ACTIVE'|'UPDATING'|'DELETING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
