<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedJobOutputConfigurationOutput $outputConfiguration
 */
class ProtectedJobResultConfigurationOutput extends Shape
{
    /**
     * @param array{outputConfiguration: ProtectedJobOutputConfigurationOutput} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
