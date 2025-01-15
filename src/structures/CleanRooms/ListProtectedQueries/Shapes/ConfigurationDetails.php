<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListProtectedQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DirectAnalysisConfigurationDetails|null $directAnalysisConfigurationDetails
 */
class ConfigurationDetails extends Shape
{
    /**
     * @param array{directAnalysisConfigurationDetails?: DirectAnalysisConfigurationDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
