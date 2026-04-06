<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfileDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 10>|null $maxBackupsToRetain
 * @property 'AUTOMATIC'|'DEACTIVATED'|null $mode
 */
class StreamConfigurationSessionBackup extends Shape
{
    /**
     * @param array{
     *     maxBackupsToRetain?: int<0, 10>|null,
     *     mode?: 'AUTOMATIC'|'DEACTIVATED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
