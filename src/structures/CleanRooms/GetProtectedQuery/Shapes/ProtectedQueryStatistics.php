<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalDurationInMillis
 */
class ProtectedQueryStatistics extends Shape
{
    /**
     * @param array{totalDurationInMillis?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
