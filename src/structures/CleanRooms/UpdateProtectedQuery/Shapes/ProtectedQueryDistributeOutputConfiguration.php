<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ProtectedQueryDistributeOutputConfigurationLocation> $locations
 */
class ProtectedQueryDistributeOutputConfiguration extends Shape
{
    /**
     * @param array{locations: list<ProtectedQueryDistributeOutputConfigurationLocation>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
