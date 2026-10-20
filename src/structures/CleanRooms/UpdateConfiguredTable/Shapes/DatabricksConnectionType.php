<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DatabricksDeltaSharingConnection|null $deltaSharing
 */
class DatabricksConnectionType extends Shape
{
    /**
     * @param array{deltaSharing?: DatabricksDeltaSharingConnection|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
