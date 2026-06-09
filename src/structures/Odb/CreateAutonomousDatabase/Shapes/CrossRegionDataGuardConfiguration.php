<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceAutonomousDatabaseArn
 */
class CrossRegionDataGuardConfiguration extends Shape
{
    /**
     * @param array{sourceAutonomousDatabaseArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
