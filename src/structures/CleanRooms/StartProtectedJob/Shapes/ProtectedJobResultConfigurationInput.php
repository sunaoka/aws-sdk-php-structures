<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectedJobOutputConfigurationInput $outputConfiguration
 */
class ProtectedJobResultConfigurationInput extends Shape
{
    /**
     * @param array{outputConfiguration: ProtectedJobOutputConfigurationInput} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
