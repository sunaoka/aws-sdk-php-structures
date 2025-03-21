<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListProtectedQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $receiverAccountIds
 */
class DirectAnalysisConfigurationDetails extends Shape
{
    /**
     * @param array{receiverAccountIds?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
