<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListProtectedJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedJobDirectAnalysisConfigurationDetails|null $directAnalysisConfigurationDetails
 */
class ProtectedJobConfigurationDetails extends Shape
{
    /**
     * @param array{directAnalysisConfigurationDetails?: ProtectedJobDirectAnalysisConfigurationDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
