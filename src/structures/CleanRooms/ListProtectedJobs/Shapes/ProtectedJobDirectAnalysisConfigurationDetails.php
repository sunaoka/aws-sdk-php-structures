<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListProtectedJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $receiverAccountIds
 */
class ProtectedJobDirectAnalysisConfigurationDetails extends Shape
{
    /**
     * @param array{receiverAccountIds?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
